#!/bin/bash


git add . && git commit -m "Token Comment" && git push origin main

curl -u "yazeed_rashed_1:118df85fc431b5187a15c0891967cc3972" \
     "http://192.168.1.10:8080/job/job1/build?token=118df85fc431b5187a15c0891967cc3972"

     #Yazeed Token : 118df85fc431b5187a15c0891967cc3972
     #yazeed_rashed_1
     #Yazeed IP : 192.168.1.10
   