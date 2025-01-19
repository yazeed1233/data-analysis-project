#!/bin/bash


git add . && git commit -m "Token Comment" && git push origin main

curl -u "yazeed_rashed_1:118df85fc431b5187a15c0891967cc3972" \
     "http://192.168.1.22:8080/job/job1/build?token=118df85fc431b5187a15c0891967cc3972"

     #Yazeed Token : 118df85fc431b5187a15c0891967cc3972
     #yazeed_rashed_1
     #Yazeed IP : 192.168.1.22
     #Mahdy Token : 11ea1478dfdd9bf3619851020b561ef330
     #Mahdy IP : 192.168.31.96
     #mahdyhamdan