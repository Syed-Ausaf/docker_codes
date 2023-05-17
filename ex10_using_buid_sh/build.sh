set -ex

USER=syedausafhaider
SERVICENAME=basic-app

version=`cat VERSION`
echo "version: $version"

docker build -t $USER/$SERVICENAME:$version .
