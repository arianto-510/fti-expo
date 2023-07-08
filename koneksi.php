<?php

$conn = mysqli_connect("localhost", "root", "root", "fti-expo");

if (mysqli_errno($conn)) {
    echo "Error Gang";
}
