<?php
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  return "dbname=d56e303npr0tle host=ec2-54-197-251-18.compute-1.amazonaws.com port=5432 user=sqjtdolrhksday password=iuFPVGaM3pTfN7wKOAI3SXfLb_ sslmode=require";
}

# Establish db connection
$db = pg_connect(pg_connection_string());
if (!$db) {
    echo "Database connection error."
    exit;
}

$result = pg_query($db, "SELECT statement goes here");
?>
