<?php

function connect_mysql() {
    $host="localhost";
    $user="root";
    $pass="somto000";
    $dbname="studentportal";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $conn;
}

function demand($required, $redirect) {
    if (!isset($required)) {
        header("Location: " . $redirect);
        die();
    }
    return $required;
}

function require_admin_login() {
    session_start();
    if (isset($_SESSION["admin_id"])
        && isset($_SESSION["admin_name"])) {
        return $_SESSION["admin_name"];
    }

    header("Location: adminlogin.php");
    die();
}

function require_student_login() {
    session_start();
    if (!isset($_SESSION["student_id"])
            || !isset($_SESSION['student_fullname'])
            || !isset($_SESSION["student_regnumber"])) {
        header("Location: studentlogin.php");
        die();
    }
}

function query($sql) {
    return connect_mysql()->prepare($sql);
}

function paramQuery($sql, $options) {
    $q = connect_mysql()->prepare($sql);
    for ($i = 0; $i < count($options); $i++) {
        $q->bindParam($i + 1, $options[$i]);
    }
    return $q;
}

function get_result($query) {
    if (!$query->execute()) {
        return null;
    }

    return $query->fetch();
}

function get_array($query) {
    if (!$query->execute()) {
        return null;
    }

    $array = array();
    while ($row = $query->fetch()) {
        $array[] = $row;
    }

    return $array;
}

function get_list($query) {
    $array = get_array($query);

    $list = array();
    foreach ($array as $row) {
        $id = $row['id'];
        $name = $row['name'];
        $list[$id] = $name;
    }

    return $list;
}


function admin_login($user, $pass) {
    $sql = "SELECT id, firstname FROM admin"
            . " WHERE username=?"
            . " AND password=?";
    $options = array($user, $pass);
    $query = paramQuery($sql, $options);
    return get_result($query);
}

function student_login($regnum, $pass) {
    $sql = "SELECT * FROM studentlogin"
            . " WHERE regnumber=?"
            . " AND password=?";
    $options = array($regnum, $pass);
    $query = paramQuery($sql, $options);
    return get_result($query);
}

function enroll_student($regnum, $dept, $level, 
        $surname, $firstname, $othernames, 
        $lga, $phone, $email, $address) {
    $sql = "INSERT INTO student (regnumber, department, level,"
            . " surname, firstname, othernames,"
            . " lga, phone, email, address)"
            . " VALUES (?,?,?,?,?,?,?,?,?,?)";
    $options = array($regnum, $dept, $level,
            $surname, $firstname, $othernames,
            $lga, $phone, $email, $address);
    $query = paramQuery($sql, $options);
    return $query->execute();
}

function get_lgas($state) {
    $sql = "SELECT * FROM lga"
            . " WHERE lga.state = ?";
    return get_list(paramQuery($sql, array($state)));
}

function get_departments($faculty) {
    $sql = "SELECT * FROM department"
            . " WHERE department.faculty = ?";
    return get_list(paramQuery($sql, array($faculty)));
}

function get_faculties() {
    $sql = "SELECT * FROM faculty";
    return get_list(query($sql));
}

function get_states() {
    $sql = "SELECT * FROM state";
    return get_list(query($sql));
}

function get_student($id) {
    $sql = "SELECT * FROM student WHERE id = ?";
    return get_result(paramQuery($sql, array($id)));
}

function get_name($table, $id) {
    $sql = "SELECT id,name FROM $table WHERE id = ?";
    return get_result(paramQuery($sql, array($id)))['name'];
}

function get_id($table, $name) {
    $sql = "SELECT id,name FROM $table WHERE name = ?";
    return get_result(paramQuery($sql, array($name)))['id'];
}

function get_faculty($id) {
    return get_name('faculty', $id);
}

function input_field($label, $name, $param) {
    if ($param === null) $param = ' disabled';
    else if ($param === true) $param = ' required';
    else if ($param === false) $param = ' ';

    echo '<div class="form-group row">';
    echo '<label for="input'.$label.'" class="col-sm-3 col-form-label">'.$name.':</label>';
    echo '<div class="col-sm-6" id="div'.$label.'">';
    echo '<input type="text" name="'.$label.'" class="form-control" id="input'.$label.'" placeholder="'.$name.'"';
    echo ' ' . $param;
    if (isset($_POST[$label])) echo ' value="' . $_POST[$label] . '"';
    echo '></div></div>';
}

function select_field($label, $name, $width, $options) {
    echo '<div class="form-group row">';
    echo '  <label for="input'.$label.'" class="col-sm-3 col-form-label">'.$name.':</label>';
    echo '  <div class="col-sm-'.$width.'" id="div'.$label.'">';
    echo '      <select class="form-control" id="input'.$label.'" name="'.$label.'">';
    foreach ($options as $id => $name) {
        echo '      <option value="'.$id.'">'.$name.'</option>';
    }
    echo '      </select>';
    echo '  </div>';
    echo '</div>';
}

?>