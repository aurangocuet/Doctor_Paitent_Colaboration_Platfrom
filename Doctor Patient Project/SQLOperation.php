<!-- Aurangajeb Alam Sabbir --!>

<?php
require_once 'Connection.php';
$con = null;

class SQLOperation
{

    public static function insertIntoTable($table_name, $array)
    {
        $con = Connection::getConnection();
        require('StringBuilder.php');
        $str = new StringBuilder();
        $str->Append("INSERT INTO ");
        $str->Append($table_name);
        $str->Append(" ");
        $str->Append("(");
        foreach ($array as $key => $value) {
            $str->Append($key);
            $str->Append(",");
        }
        $str->Remove($str->Count());
        $str->Append(")");
        $str->Append(" ");
        $str->Append("VALUES");
        $str->Append("(");
        reset($array);
        foreach ($array as $key => $value) {
            $str->Append("'");
            $str->Append($value);
            $str->Append("'");
            $str->Append(",");
        }
        $str->Remove($str->Count());
        $str->Append(")");
        echo $str->ToString();
        if (!mysqli_query($con, $str->ToString()))
            echo "Error creating table: " . mysqli_error($con);
    }
}

?>