<?php
if (filter_var('hasan@yahoo.com', FILTER_VALIDATE_EMAIL)) {
    echo 'VALID';
} else {
    echo 'NOT VALID';
}