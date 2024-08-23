<?php
function getUser($conn, $id) {
    // Prepare the SQL statement
    $sql = "SELECT * FROM students_mst WHERE id = ?";
    
    // Initialize the prepared statement
    $stmt = $conn->prepare($sql);
    
    // Bind the parameter to the statement
    $stmt->bind_param("i", $id); // "i" means the variable type is an integer
    
    // Execute the prepared statement
    $stmt->execute();
    
    // Get the result
    $result = $stmt->get_result();
    
    // Check if the user was found
    if ($result->num_rows > 0) {
        // Fetch the user data
        $user = $result->fetch_assoc();
        return $user;
    } else {
        return null; // User not found
    }
    
    // Close the statement
    $stmt->close();
}