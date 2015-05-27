# README #

Web Programming Assignment of
[Andre Ribas]
(https://titan.csit.rmit.edu.au/~s3530481/wp/)
{}
and
[Robert Laine-Wyllie]
(https://titan.csit.rmit.edu.au/~s3433096/wp/)
{https://github.com/rmit-s3433096-RobLW}

Installation
=====

Just run this inside the project directory:

    /project/path $ docker build -t <username>/<project> .
    /project/path $ docker run -d -p 80:80 -v /project/path:/app <username>/<project>

Copy the .htaccess-sample and edit it to suit your needs. The sample works with the default docker

    /project/path $ cp .htaccess-sample .htaccess
