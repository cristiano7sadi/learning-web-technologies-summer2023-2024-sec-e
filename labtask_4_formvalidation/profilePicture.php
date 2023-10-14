<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK)
        {
            $allowedFormats = ["image/jpeg", "image/jpg", "image/png"];
            $maxFileSize = 4 * 1024 * 1024; // 4MB in bytes

            if (in_array($_FILES["image"]["type"], $allowedFormats))
            {
                if ($_FILES["image"]["size"] <= $maxFileSize)
                {
                    echo "Upload successful";
                }
                else
                {
                    echo "Error: Picture size should not be more than 4MB.";
                }
            } 
            else
            {
                echo "Error: Picture format must be jpeg, jpg, or png.";
            }
        }
        else
        {
            echo "Error: No file uploaded or an error occurred during the upload.";
        }
}
?>