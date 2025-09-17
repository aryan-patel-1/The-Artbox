<?php 

function validateForm($data) {
    $errors = [];
    
    if (empty($data['title'])) {
        $errors[] = "Title is required";
    }
    
    if (empty($data['artist'])) {
        $errors[] = "Artist is required";
    }
    
    if (empty($data['description'])) {
        $errors[] = "Description is required";
    } elseif (strlen($data['description']) < 3) {
        $errors[] = "Description must contain at least 3 characters";
    }
    
    if (empty($data['image'])) {
        $errors[] = "Image URL is required";
    } elseif (!filter_var($data['image'], FILTER_VALIDATE_URL)) {
        $errors[] = "Image URL is not valid";
    }
    
    return $errors;
}
