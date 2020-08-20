

<script>

function prepare(){
    let infos = [studInfo , staffInfo , guestInfo  ,  studlapinfo , regstudInfo , errdisp ];
    infos.forEach((info) => {
        info.style.display = "none";
    });
}
function enableForm(){
    let infos = [studInfo , staffInfo , guestInfo , userType];
    var userTypeControl = document.getElementById("selector1");
    var selectedValue = userTypeControl.value;
    infos.forEach((info , index) => {
        if((index + 1) == selectedValue) {
            console.log(index);
            info.style.display = "block";
        } else {
            info.style.display = "none";
        }
    });
}
    
function checkStud() {
    console.log("Hello world");
    var id = document.getElementById("holderStudentID").value;

    $.ajax({
        method: 'POST',
        url: url,
        data: { student_id :id,_token: token }


    }).done(function (msg) {
        console.log(msg);
        console.log(!msg['err']);
        if(!msg['err']){

            var studlapinfo2 = document.getElementById("studlapinfo");
            var regstudinfo2 = document.getElementById("regstudInfo");


            var studName = document.getElementById("studname");
            var studdept = document.getElementById("studDept");
            var studyear = document.getElementById("studyr");
            var studloc = document.getElementById("studstat");
            var studgend = document.getElementById("studgen");
            
            document.getElementById("errdisp").style.display = 'none';

            studName.innerHTML = msg['first_name'] + " " + msg['last_name'];
            studdept.innerHTML = msg['department'];
            studyear.innerHTML = msg['year_joined'];
            studloc.innerHTML = msg['currently'];
            studgend.innerHTML = msg['gender'];

            regstudinfo2.style.display = '';
            studlapinfo2.style.display = '';

            

            document.getElementById("selStudID").value = msg['id'];

        }else {

            document.getElementById("errdisp").style.display = '';
        
            var studlapinfo = document.getElementById("studlapinfo");
            
            var regstudinfo = document.getElementById("regstudInfo");
            regstudinfo.style.display = 'none';
            studlapinfo.style.display = 'none';

        }
    });

}
      
$(window).load(function(){
    prepare();
    document.getElementById("mainWrapper").style.display = "block";
})
    
</script>