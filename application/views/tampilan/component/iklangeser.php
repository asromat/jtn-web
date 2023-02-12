<style>
.slider{
  max-width: 400px;
  height: 380px;
  border-radius: 10px;
  overflow: hidden;
}

.slides{
  width: 500%;
  max-height: 400px;
  display: flex;
}

.slides input{
  display: none;
}

.slide{
  width: 20%;
  transition: 2s;
}

.slide img{
  width: 100%;
  height: 100%;
}

/*css for manual slide navigation*/

.navigation-manual{
  position: absolute;
  width: 100%;
  margin-top: 20px;
  display: flex;
  justify-content: center;
}

.manual-btn{
  border: 2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  cursor: pointer;
  transition: 1s;
}

.manual-btn:not(:last-child){
  margin-right: 40px;
}

.manual-btn:hover{
  background: #40D3DC;
}

#radio1:checked ~ .first{
  margin-left: 0;
}

#radio2:checked ~ .first{
  margin-left: -20%;
}

#radio3:checked ~ .first{
  margin-left: -40%;
}

#radio4:checked ~ .first{
  margin-left: -60%;
}
#radio5:checked ~ .first{
  margin-left: -60%;
}
#radio6:checked ~ .first{
  margin-left: -60%;
}

/*css for automatic navigation*/

.navigation-auto{
  position: absolute;
  display: flex;
  width: 300px;
  justify-content: center;
  margin-top: 460px;
}

.navigation-auto div{
  border: 2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  transition: 1s;
}

.navigation-auto div:not(:last-child){
  margin-right: 40px;
}

#radio1:checked ~ .navigation-auto .auto-btn1{
  background: #40D3DC;
}

#radio2:checked ~ .navigation-auto .auto-btn2{
  background: #40D3DC;
}

#radio3:checked ~ .navigation-auto .auto-btn3{
  background: #40D3DC;
}

#radio4:checked ~ .navigation-auto .auto-btn4{
  background: #40D3DC;
}
      
</style>
    <!--image slider start-->
    <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <input type="radio" name="radio-btn" id="radio5">
        <input type="radio" name="radio-btn" id="radio6">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?=$daerah['ads10']?>"></script>
        </div>
        <div class="slide">
          <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?=$daerah['ads11']?>"></script>
        </div>
        <div class="slide">
          <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?=$daerah['ads12']?>"></script>
        </div>
        <div class="slide">
          <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?=$daerah['ads13']?>"></script>
        </div>
         <div class="slide">
          <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?=$daerah['ads14']?>"></script>
        </div>
         <div class="slide">
          <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?=$daerah['ads15']?>"></script>
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->

        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
        <label for="radio5" class="manual-btn"></label>
        <label for="radio6" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 6){
        counter = 1;
      }
    }, 5000);
    </script>

