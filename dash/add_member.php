<?php
session_start();

include("../assets/php/dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars($_POST['name']);
    $adno = htmlspecialchars($_POST['adno']);
    $bday = htmlspecialchars($_POST['bday']);
    $wano = htmlspecialchars($_POST['wano']);

    // Check if $adno already exists in the admission_no column
    $sql = "SELECT id FROM members WHERE admission_no = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $adno);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Admission number already exists, get the existing row's ID
        $row = $result->fetch_assoc();
        $member_id = $row['id'];

        $stmt2 = $conn->prepare("INSERT INTO memberships (member_id, club_id) VALUES (?, ?)");
        $stmt2->bind_param("ii", $member_id, $_SESSION['userClubId']);

        // Execute the statement
        if ($stmt2->execute()) {
            header("Location: ./manage_members.php?status=member-add-success");
        } else {
            header("Location: ./manage_members.php?status=member-add-error");
        }
    } else {
        // Admission number does not exist, insert new data
        $stmt1 = $conn->prepare("INSERT INTO members (full_name, admission_no, birthday, whatsapp_no) VALUES (?, ?, ?, ?)");
        $stmt1->bind_param("ssss", $name, $adno, $bday, $wano);

        // Execute the statement
        if ($stmt1->execute()) {
            $sql = "SELECT id FROM members WHERE admission_no = ?";
            $stmt4 = $conn->prepare($sql);
            $stmt4->bind_param("s", $adno);
            $stmt4->execute();
            $result = $stmt4->get_result();

            if ($result->num_rows > 0) {
                // Admission number already exists, get the existing row's ID
                $row = $result->fetch_assoc();
                $member_id = $row['id'];

                $stmt5 = $conn->prepare("INSERT INTO memberships (member_id, club_id) VALUES (?, ?)");
                $stmt5->bind_param("ii", $member_id, $_SESSION['userClubId']);

                // Execute the statement
                if ($stmt5->execute()) {
                    header("Location: ./manage_members.php?status=member-add-success");
                } else {
                    header("Location: ./manage_members.php?status=member-add-error");
                }
            }else {
                header("Location: ./manage_members.php?status=member-add-error");
            }
        } else {
            header("Location: ./manage_members.php?status=member-add-error");
        }
    }
    
}else{
    header("Location: ./manage_members.php");
}
?>