#!/bin/bash


git add . && git commit -m "Deploying..." && git push origin main

curl -u "mahdyhamdan:11ea1478dfdd9bf3619851020b561ef330" 
     "http://192.168.31.96:8380/job/job1/build?token=11ea1478dfdd9bf3619851020b561ef330"