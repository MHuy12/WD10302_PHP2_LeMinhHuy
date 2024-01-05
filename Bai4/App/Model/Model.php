<?php
function get_events()
{
    include '../Config/config.php';

    $sql = "SELECT * FROM events";
    $stmt = $connection->prepare($sql);

    $stmt->execute();

    $result = $stmt->get_result();
    $events = array();

    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $events[] = $row;
    }

    $stmt->close();
    $connection->close();

    return $events;
}

?>