# CodeIgniter 4 RESTful API 샘플

## CodeIgniter란?

CodeIgniter는 가볍고 빠르고 유연하며 안전한 PHP 풀 스택 웹 프레임워크입니다.

자세한 내용은 [Codeigniter 한국 사용자 포럼](https://www.cikorea.net/) 이나 [공식 사이트](http://codeigniter.com) 에서 확인할 수 있습니다.

* 사용자 가이드 안내

[한국어 버전](http://ci4doc.cikorea.net/). 
[영문 버전](https://codeigniter4.github.io/userguide/). 

## RESTful API 샘플

CodeIgniter 4 웹 프레임워크를 사용하여 만든 RESTful API 샘플입니다.
KCD(Korea Community Day) 2020 행사의 일환인 "CodeIgniter4만으로 RESTful api 구현하기" 트랙을 위해 작성되었습니다.
CodeIgniter 4를 이용하여 RESTful API를 만들고자 하는분들께 시작점이 되기를 기대합니다.

<iframe width="560" height="315" src="https://www.youtube.com/embed/8iy5SCwHmKw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

## 설치 및 실행 방법

1. git clone https://github.com/hoksi/ci4rest-sample.git
2. composer install --no-dev
3. copy `env-restsample` `.env`
4. php spark serve
5. 웹브라우저에 http://localhost:8080/api/user 접속

## 테스트

1. User List : http://localhost:8080/api/user
![get](./img/get.png)
2. Add User : http://localhost:8080/api/user
![post](./img/post.png)
3. Modify User : http://localhost:8080/api/user/{user_id}
![gputet](./img/put.png)
4. Get User : http://localhost:8080/api/user/{user_id}
![get2](./img/get2.png)
5. Delete User : http://localhost:8080/api/user/{user_id}
![del](./img/del.png)

## POSTMAN Collection

포스트맨을 이용하여 API 테스트를 합니다.

[![Run in Postman](https://run.pstmn.io/button.svg)](https://app.getpostman.com/run-collection/bf442a0ee000516b718a)


