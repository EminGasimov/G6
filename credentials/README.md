# CREDENTIALS INFO for GDSD 2019 Group G6 Project

## URL
http://ec2-3-81-108-219.compute-1.amazonaws.com/G6/milestones/m0/

Note the IP address in URL may change every time we restart the server of EC2.

## server credential

To connect to Amazon AWS EC2 instance from linux shell we need to have a credential file with .pem extension which is the Private key file used to connect to the remote AWS cloud server via ssh on port 22.

We are using a file named, g6ubuntu.pem which is private and locally stored. 

Steps to connect to server:
1. Login to Amazon AWS Educate Starter student account
2. Go to AWS Console
3. Select EC2 service
4. Go to Instance side menu option
5. Right-Click the instance created for our server
6. Select the option "Instance State > Start" from context menu.
7. From local Linux console go to the folder where the private credential file g6ubuntu.pem is stored.
8. Type following command where <Public DNS (IPv4)> is dynamically assigned by AWS each time the server starts.

```
ssh -i "g6ubuntu.pem" ubuntu@<Public DNS (IPv4)>
```
9. Then if the connection is successful, you will be logged into server's linux shell.

## mysql credential
* username: rumy
* password: rumy#1234

