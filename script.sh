#!/bin/bash


git add . && git commit -m "Deploying..." && git push origin main

curl -u "yazeed_rashed_1:118df85fc431b5187a15c0891967cc3972" \
     "http://192.168.1.22:8080/job/job1/build?token=118df85fc431b5187a15c0891967cc3972"
