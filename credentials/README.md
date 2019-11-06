# CREDENTIALS INFO for GDSD 2019 Group G6 Project

# URL: http://ec2-3-81-108-219.compute-1.amazonaws.com/G6/milestones/m0/

## server credential

To connect to Amazon AWS EC2 instance from linux shell we need to have a credential file with .pem extension which is the Private key file used to connect to the remote AWS cloud server via ssh on port 22.

We are using a file named, g6ubuntu.pem which is private and locally stored. 

An example command to connect to server is as follows:
```
ssh -i "g6ubuntu.pem" ubuntu@ec2-3-81-108-219.compute-1.amazonaws.com
```

## mysql credential
* username: rumy
* password: rumy#1234

