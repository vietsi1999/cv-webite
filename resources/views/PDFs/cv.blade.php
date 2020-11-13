<!DOCTYPE html>
<html>
<head>
  <title>CV Website</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <style type="text/css">
    *{
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
    }
    body{
      border: 1px solid black;
    }
    ul{
      padding:0 6%;
    } 
    li{
      list-style: none;
    }
    .wrapper{
      width: 100%;
      height: 842px;
    }
    .left{
      width: 30%;
      height: 100%;
      background-color: #0e9fed;  
      float: left;
      color: white;
    }
    .left .avatar{
      width: 100%;
      height: 30%;
      background-color: white;
      border-bottom: 5px dashed #0e9fed;
      border-right: 5px dashed #0e9fed;
    }
    .left .avatar img{
      height: 90%;
      width: 70%;
      border-radius: 30px;
      margin: 4% 15%;
    }
    .left-content{
      padding-left: 3%;
      padding-right: 3%;
    }
    .content .title{
      width: 80%;
      height: 30px;
      margin: 5% 10%;
      text-align: center;
      background-color: white;
      color: #0e9fed;
      line-height: 30px;
      transform: skew(-20deg);
      border-radius: 5px;
    }
    .right{
      width: 70%;
      height: 100%;
      float: right;
    }
    .right .big-title{
      width: 100%;
      height: 30%;
      padding: 1% 3%;
      text-align: right;
      color: white;
      background-color: #0e9fed;
    }
    .right .big-title p{
      text-align: justify;
    }
    .big-title .decorate{
      width: 70%;
      height: 30px;
      content: "";
      transform: skew(33deg);
      border-radius: 0 5px 5px 0;
      background-color: white;
      position: relative;
      text-align: center;
      line-height: 30px;
      margin: 1% 0 0.5% 30%;
    }
    .big-title .decorate:after, .decorate:before{
      content: "";
      width: 20px;
      height: 30px;
      background: black;
      border-radius:  5px 0 0 5px;
      position: absolute;
      top: 0%;
      left: -25px;
    }
    .big-title .decorate:after{
      left: -55px;
      border-radius:  5px;
    }
    .big-title .decorate2{
      width: 40%;
      margin-left: 60%;
    }
    .right-content{
      width: 100%;
      padding: 1% 3%;
    }
    .right-content .title{
      width: 50%;
      height: 30px;
      background-color: #0e9fed;
      color: white;
      position: relative;
      text-align: center;
      line-height: 30px;
      margin: 3% 0 1% 0;
    }
    .right-content .title:before{
      width: 0px;
      height: 0px;
      content: "";
      border-top: 30px solid #0e9fed;
      border-right: 20px solid transparent;
      position: absolute;
      top: 0%;
      left: 100%;
    }
    .right-content .title:after{
      content: "";
      width: 20px;
      height: 30px;
      transform: skew(-33deg);
      background: black;
      border-top-right-radius:  5px;
      border-bottom-right-radius:  5px;
      position: absolute;
      top: 0%;
      left: 107%;
    }
    .table-info{
      margin: 0 0 0 2%;
      width: 70%;
    }
    .table-info td:nth-child(odd){
      width: 30%;
    }
    .table-info td:nth-child(even){
      width: 70%;
    }
    .content-exp h4{
      margin: 10px 0;
    }
    .content-exp p{
      text-align: justify;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <div class="left">
      <div class="avatar">
        <img src="./resources/images/Avatar.png" >
      </div>
      <div class="left-content">
        <div class="content">
          <div class="title">{{__('contact_me')}}</div>
          <p>
            <i class="fas fa-home"></i>
            {{__('address_value')}}
          </p>
          <p>
            <i class="fas fa-phone"></i>
            0762798615
          </p>
          <p>
            <i class="fas fa-envelope"></i>
            vietsi199@gmail.com
          </p>
        </div>
        <div class="content">
          <div class="title">{{__('skill')}}</div>
          <ul>
            <li>HTML/CSS - Boostrap</li>
            <li>JS - Jquery</li>
            <li>PHP - Laravel</li>
            <li>Java - Spring</li>
            <li>Ruby - Rails</li>
            <li>SQL - MySQL/SQLServer</li>
            <li>Git - Github</li>
          </ul>
        </div>
        <div class="content">
          <div class="title">{{__('Language')}}</div>
          <ul>
            <li>{{__('english')}}</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="right">
      <div class="big-title">
        <div class="decorate"></div>
        <div class="decorate decorate2"></div>
        <h1>{{__('tran_viet_si')}}</h1>
        <h3>Curriculum_Vitae</h3>
        <p>
          {{__('introduce_2')}}
        </p>
      </div>

      <div class="right-content">
        <!-- personal profile -->
        <div class="title">
          {{__('Personal_profile')}}
        </div>
        <table class="table-info">
          <tbody>
            <tr>
              <td><b>{{__('gender')}}</b></td>
              <td>: {{__('male')}}</td>
            </tr>
            <tr>
              <td><b>{{__('birthday')}}</b></td>
              <td>: 17/02/1999</td>
            </tr>
            <tr>
              <td><b>{{__('marital_status')}}</b></td>
              <td>: {{__('single')}}</td>
            </tr>
            <tr>
              <td><b>{{__('nationality')}}</b></td>
              <td>: {{__('vietnam')}}</td>
            </tr>
            <tr>
              <td><b>{{__('country')}}</b></td>
              <td>: {{__('vietnam')}}</td>
            </tr>
          </tbody>
        </table>
        <!-- end personal profile -->

        <!-- education -->
        <div class="title">
          {{__('Education')}}
        </div>
        <table class="table-info">
          <tbody >
            <tr>
              <td><b>{{__('school')}}</b></td>
              <td>: {{__('school_cit')}}</td>
            </tr>
            <tr>
              <td><b>{{__('completion_date')}}</b></td>
              <td>: 5/2020</td>
            </tr>
            <tr>
              <td><b>{{__('major')}}</b></td>
              <td>: {{__('IT')}}</td>
            </tr>
            <tr>
              <td><b>{{__('gpa')}}</b></td>
              <td>: 3.54 / 4.0</td>
            </tr>
            <tr>
              <td><b>{{__('graduation_grade')}}</b></td>
              <td>: {{__('good')}}</td>
            </tr>
          </tbody>
        </table>
        <!-- end education -->

        <!-- experience -->
        <div class="title">
          {{__('experience')}}
        </div>
        <div class="content-exp">
          <h4>3/2020 - 7/3030: {{__('FA_fpt')}}</h4>
          <p>
            {{__('detail_job')}}
          </p>
        </div>
        <!-- end experience  -->
      </div>
      <!-- end right content -->
    </div>
    <!-- end right -->
  </div>
  <!-- end wrapper -->
</body>
</html>