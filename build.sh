#!/bin/sh
cd ./dom_xss
docker build -t dom_xss:latest .
cd ../xss_1
docker build -t xss_1:latest .
cd ../xss_2
docker build -t xss_2:latest .
cd ../manifest_error_injection
docker build -t manifest_error_injection:latest .
cd ../bool_injection
docker build -t bool_injection:latest .
cd ../post_injection
docker build post_injection:latest .

echo "build is success"

