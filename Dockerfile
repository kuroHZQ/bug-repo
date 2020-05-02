#腾讯云服务器apt-get实在是太慢了。。试了很多办法都解决不了。
#这里本地做一个image传到dockerhub，然后拉到本地 换个TAG ubuntu:basic
#之后都FROM ubuntu:basic来构建镜像
FROM ubuntu:trusty
MAINTAINER kuroHZQ
RUN echo "deb http://mirrors.aliyun.com/ubuntu/ trusty main restricted universe multiverse"> /etc/apt/sources.list
RUN apt-get update \
        && apt-get install -y mysql-server apache2 php5 php5-mysql
