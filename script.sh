#!/bin/bash 
find . -name '*.php' -print0 | xargs -0 chmod -v go=;
echo "..........::::::::===::::::::.........."
echo "..:: .php files permisions changed ::.."
echo "..........::::::::===::::::::.........."