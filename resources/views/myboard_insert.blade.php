<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <title>MemoFrame</title>
</head>
<body>
  <div class="phone">
    <form accept-charset="UTF-8" method="POST" action="api/message">
      <div class="input" style="width:100%">
        <input type="text" name="body" id="text">
      </div>
      <div class="colors">
        <div class="radio" id="greenBtn">
          <input type="radio" name="color" value="0" id="green">
          <label for="green">Green</label>
        </div>
        <div class="radio" id="blueBtn">
          <input type="radio" name="color" value="1" id="blue">
          <label for="blue">Blue</label>
        </div>
        <div class="radio" id="yellowBtn">
          <input type="radio" name="color" value="2" id="yellow">
          <label for="yellow">Yellow</label>
        </div>
        <div class="radio" id="pinkBtn">
          <input type="radio" name="color" value="3" id="pink">
          <label for="pink">Pink</label>
        </div>
        <div class="radio" id="redBtn">
          <input type="radio" name="color" value="4" id="red">
          <label for="red">Red</label>
        </div>
        <input type="hidden" name="key" value="{{config('routing.postKey')}}">
        <input type="hidden" name="from" value="htmlpage">
      </div>
      <div class="submit">
        <input type="submit" value="Message!">
      </div>
    </form>
  </div>
</body>
<style>
.phone {
  width:100%;
}

.input > input {
  margin-top:30px;
  margin-bottom: 30px;
  width:100%;
  height:30px;
}

.colors {
  display: flex;
  justify-content: space-around;
}

.radio {
  display: flex;
  flex-direction: column;
  padding-top:25px;
  border-style: solid;
  width: 20%;
  height: 48px;
}

#greenBtn {
  border-color: #58be89;
  background-color: #58be89;
}

#blueBtn {
  border-color: #40aaef;
  background-color: #40aaef;
}

#pinkBtn {
  border-color: #f28eb1;
  background-color: #f28eb1;
}

#redBtn {
  border-color: #f25454;
  background-color: #f25454;
}

#yellowBtn {
  border-color: #fff26b;
  background-color: #fff26b;
}

.submit > input {
  margin-top:30px;
  margin-bottom: 30px;
  width:100%;
  height:30px;
}
</style>
<script>
  console.log(document.getElementById("text"));
  document.getElementById("text").focus();
</script>
</html>
