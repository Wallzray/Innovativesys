<?php
session_abort();
echo "<script>alert('User Logged Out');
    window.location.href= 'login.php';
</script>"
?>