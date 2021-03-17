<?php
include "../Model/Bcrypt.php";

$senha = Bcrypt::hash("997640769");

echo $senha;
