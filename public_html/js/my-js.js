
//show flag and country code on selection of country

function selectionchange(){
		        
    var e = document.getElementById("kantry");
    var str = e.options[e.selectedIndex].value;
                
    $.ajax({
       url:"loadaddresscode.php",
       method:"POST",
       data:{str:str},
       cache:false,
       success:function(data)
       {
        $("#kabendera").empty();
        $('#kabendera').append(data);
        //$('#kabendera').off('click');
       },
         timeout: 3000 // sets timeout to 3 seconds
    });
                                      
}

//Exhibitors form highlight input with value 

$("#submitexhibitor").on("click",function(e){ 
    var input     = $("#input11");
    var kantry11  = $("#kantry11");
    var inpt2     = $("#inpt2");
    var input55   = $("#input55");
    var input7    = $("#input77");
    var input3    = $("#input33");
    var input333  = $("#input333");
    var input3333 = $("#input3333");
    var input4    = $("#input44");
    var input5    = $("#kantry");
    var input6    = $("#input66");
    var input10   = $("#input1010");
    var input12   = $("#input1212");
    var input2    = $("#input22");
    var input13   = $("#input1313");
    var read      = $('input:checkbox[name=read]');
    var input11   = $("#input1111");
    
    var badge2    = $("#badge2");
    var agro      = $('input:checkbox[name=agroprocessing]');
    var renew     = $('input:checkbox[name=renewable]');
    var mineral   = $('input:checkbox[name=minerals]');
    var pharma    = $('input:checkbox[name=pharmaceuticals]');
    var manufac   = $('input:checkbox[name=manufacturing]');
    var constr    = $('input:checkbox[name=construction]');
    var logist    = $('input:checkbox[name=logistics]');
    var tour      = $('input:checkbox[name=tourism]');
    var ict       = $('input:checkbox[name=ict]');
    var fin       = $('input:checkbox[name=financial]');
    
    if(!input.val()){
        input.css("border","2px solid red");
    }if(!kantry11.val()){
        kantry11.css("border","2px solid red");
    }if(!inpt2.val()){
        inpt2.css("border","2px solid red");
    }if(!input55.val()){
        input55.css("border","2px solid red");
    }if(!input7.val()){
        input7.css("border","2px solid red");
    }if(!input3.val()){
        input3.css("border","2px solid red");
    }if(!input333.val()){
        input333.css("border","2px solid red");
    }if(!input3333.val()){
        input3333.css("border","2px solid red");
    }if(!input4.val()){
        input4.css("border","2px solid red");
    }if(!input5.val()){
        input5.css("border","2px solid red");
    }if(!input6.val()){
        input6.css("border","2px solid red");
    }if(!input10.val()){
        input10.css("border","2px solid red");
    }if(!input12.val()){
        input12.css("border","2px solid red");
    }if(!input2.val()){
        input2.css("border","2px solid red");
    }if(!input13.val()){
        input13.css("border","2px solid red");
    }if(!read.is(':checked')){
        input11.css("border","2px solid red");
    }
    
    if(!agro.is(':checked') && !renew.is(':checked') && !mineral.is(':checked') && !pharma.is(':checked') && !manufac.is(':checked') && !constr.is(':checked') && !logist.is(':checked') && !tour.is(':checked') && !ict.is(':checked') && !fin.is(':checked')){
        badge2.css("border","2px solid red");
        e.preventDefault();
    }
    
    if(!input.val() || !input55.val() || !input7.val() || !input3.val() || !input333.val() || !input3333.val() || !input4.val() || !input5.val() || !input6.val() || !input10.val() || !input12.val() || !input2.val() || !input13.val() || !read.is(':checked')) {                             
        e.preventDefault();
    }
    
});

//Sponsors form highlight input with value 

$("#submitsponsors").on("click",function(e){
    
    var kantry1  = $("#kantry1");
    var kantry11 = $("#kantry11");
    var inpt1    = $("#inpt1");
    var inpt2    = $("#inpt2");
    var inpt3    = $("#inpt3");
    var inpt4    = $("#inpt4");
    var inpt5    = $("#inpt5");
    var inpt55   = $("#inpt55");
    var inpt555  = $("#inpt555");
    var inpt6    = $("#inpt6");
    var kantry   = $("#kantry");
    var inpt8    = $("#inpt8");
    var inpt9    = $("#inpt9");
    var input13  = $("#input1313");
    var inpt10   = $("#inpt10");
    var read     = $('input:checkbox[name=read]');
    
    var badge2   = $("#badge2");
    var agro     = $('input:checkbox[name=agroprocessing]');
    var renew    = $('input:checkbox[name=renewable]');
    var mineral  = $('input:checkbox[name=minerals]');
    var pharma   = $('input:checkbox[name=pharmaceuticals]');
    var manufac  = $('input:checkbox[name=manufacturing]');
    var constr   = $('input:checkbox[name=construction]');
    var logist   = $('input:checkbox[name=logistics]');
    var tour     = $('input:checkbox[name=tourism]');
    var ict      = $('input:checkbox[name=ict]');
    var fin      = $('input:checkbox[name=financial]');
    
    
    if(!kantry1.val()){
        kantry1.css("border","2px solid red");
    }if(!kantry11.val()){
        kantry11.css("border","2px solid red");
    }if(!inpt1.val()){
        inpt1.css("border","2px solid red");
    }if(!inpt2.val()){
        inpt2.css("border","2px solid red");
    }if(!inpt3.val()){
        inpt3.css("border","2px solid red");
    }if(!inpt4.val()){
        inpt4.css("border","2px solid red");
    }if(!inpt5.val()){
        inpt5.css("border","2px solid red");
    }if(!inpt55.val()){
        inpt55.css("border","2px solid red");
    }if(!inpt555.val()){
        inpt555.css("border","2px solid red");
    }if(!inpt6.val()){
        inpt6.css("border","2px solid red");
    }if(!kantry.val()){
        kantry.css("border","2px solid red");
    }if(!inpt8.val()){
        inpt8.css("border","2px solid red");
    }if(!inpt9.val()){
        inpt9.css("border","2px solid red");
    }if(!input13.val()){
        input13.css("border","2px solid red");
    }
    
    if(!agro.is(':checked') && !renew.is(':checked') && !mineral.is(':checked') && !pharma.is(':checked') && !manufac.is(':checked') && !constr.is(':checked') && !logist.is(':checked') && !tour.is(':checked') && !ict.is(':checked') && !fin.is(':checked')){
        badge2.css("border","2px solid red");
        e.preventDefault();
    }
    
    if(!kantry1.val() || !inpt1.val() || !inpt3.val() || !inpt4.val() || !inpt5.val() || !inpt55.val() || !inpt555.val() || !inpt6.val() || !kantry.val() || !inpt8.val() || !inpt9.val() || !input13.val() || !read.is(':checked')) {                             
        e.preventDefault(); 
    }
    
});

//Attendance registration highlight input with no value 

$("#submitattend").on("click",function(e){
    
    var inp1      = $("#inp1");
    var kant2     = $("#kant2");
    var inp3      = $("#inp3");
    var inp4      = $("#inp4");
    var inp5      = $("#inp5");
    var inp6      = $("#inp6");
    var inp66     = $("#inp66");
    var inp7      = $("#inp7");
    var inp8      = $("#inp8");
    var kantry    = $("#kantry");
    var inp10     = $("#inp10");
    var inp12     = $("#inp12");
    var kant13    = $("#kant13");
    var inp14     = $("#inp14");
    var inpt10    = $("#inpt10");
    var invite    = $('input:checkbox[name=invite]');
    var inp16     = $("#inp16");
    var input1313 = $("#input1313");
    var inp18     = $('input:radio[name=badge]');
    var inp1818   = $("#inp1818");
    var inp1919   = $("#inp1919");
    var inp2020   = $("#inp2020");
    var read      = $('input:checkbox[name=read]');
    var inp21     = $("#inp21");
    var pass      = $("#passwordInput");
    
    var badge2    = $("#badge2");
    var agro      = $('input:checkbox[name=agroprocessing]');
    var renew     = $('input:checkbox[name=renewable]');
    var mineral   = $('input:checkbox[name=minerals]');
    var pharma    = $('input:checkbox[name=pharmaceuticals]');
    var manufac   = $('input:checkbox[name=manufacturing]');
    var constr    = $('input:checkbox[name=construction]');
    var logist    = $('input:checkbox[name=logistics]');
    var tour      = $('input:checkbox[name=tourism]');
    var ict       = $('input:checkbox[name=ict]');
    var fin       = $('input:checkbox[name=financial]');
    
    if(!inp1.val()){
        inp1.css("border","2px solid red");
    }if(!kant2.val()){
        kant2.css("border","2px solid red");
    }if(!inp3.val()){
        inp3.css("border","2px solid red");
    }if(!inp4.val()){
        inp4.css("border","2px solid red");
    }if(!inp5.val()){
        inp5.css("border","2px solid red");
    }if(!inp6.val()){
        inp6.css("border","2px solid red");
    }if(!inp66.val()){
        inp66.css("border","2px solid red");
    }if(!inp7.val()){
        inp7.css("border","2px solid red");
    }if(!inp8.val()){
        inp8.css("border","2px solid red");
    }if(!kantry.val()){
        kantry.css("border","2px solid red");
    }if(!inp10.val()){
        inp10.css("border","2px solid red");
    }if(!inp12.val()){
        inp12.css("border","2px solid red");
    }if(!kant13.val()){
        kant13.css("border","2px solid red");
    }if(!inp14.val()){
        inp14.css("border","2px solid red");
    }if(!inp16.val()){
        inp16.css("border","2px solid red");
    }if(!input1313.val()){
        input1313.css("border","2px solid red");
    }if(!pass.val()){
        pass.css("border","2px solid red");
    }
    
    if(!inp18.is(':checked')){
        inp1818.css("border","2px solid red");
        inp1919.css("border","2px solid red");
        inp2020.css("border","2px solid red");
        e.preventDefault();
    }
    
    if(!read.is(':checked')){
        inp21.css("border","2px solid red");
    }
    
    if(!agro.is(':checked') && !renew.is(':checked') && !mineral.is(':checked') && !pharma.is(':checked') && !manufac.is(':checked') && !constr.is(':checked') && !logist.is(':checked') && !tour.is(':checked') && !ict.is(':checked') && !fin.is(':checked')){
        badge2.css("border","2px solid red");
        e.preventDefault();
    }
    
    if(!inp1.val() || !inp4.val() || !inp5.val() || !inp6.val() || !inp66.val() || !inp7.val() || !inp8.val() || !kantry.val() || !inp10.val() || !inp12.val() 
       || !kant13.val() || !inp14.val() || !inp16.val() || !input1313.val() || !read.is(':checked') || !pass.val()) {                             
        e.preventDefault();
    }
    
});

$(document).keypress(function(e) {
    
    var input     = $("#input11");
    var input2    = $("#input22");
    var input3    = $("#input33");
    var input333  = $("#input333");
    var input3333 = $("#input3333");
    var input4    = $("#input44");
    var input50   = $("#input55"); 
    var inputk    = $("#kantry1");
    var input5    = $("#kantry");
    var kantry11  = $("#kantry11");
    var input6    = $("#input66");
    var input7    = $("#input77");
    var input8    = $("#input88");
    var input9    = $("#input99");
    var input10   = $("#input1010");
    var input11   = $("#input1111");
    var input12   = $("#input1212");
    var input13   = $("#input1313");
    var input44   = $("#input4444");
    var input55   = $("#input5555"); 
    var inpt1     = $("#inpt1");
    var inpt2     = $("#inpt2");
    var inpt3     = $("#inpt3");
    var inpt4     = $("#inpt4");
    var inpt5     = $("#inpt5");
    var inpt55    = $("#inpt55");
    var inpt555   = $("#inpt555");
    var inpt6     = $("#inpt6");
    var inpt8     = $("#inpt8");
    var inpt9     = $("#inpt9");
    var pass      = $("#passwordInput");
    
    var inp1      = $("#inp1");
    var kant2     = $("#kant2");
    var inp3      = $("#inp3");
    var inp4      = $("#inp4");
    var inp5      = $("#inp5");
    var inp6      = $("#inp6");
    var inp66      = $("#inp66");
    var inp7      = $("#inp7");
    var inp8      = $("#inp8");
    var kantry    = $("#kantry");
    var inp10     = $("#inp10");
    var inp12     = $("#inp12");
    var kant13    = $("#kant13");
    var inp14     = $("#inp14");
    var inpt10    = $("#inpt10");
    var inp16     = $("#inp16");
    var inp18     = $('input:checkbox[name=badge3]');
    var inp19     = $('input:checkbox[name=badge2]');
    var inp20     = $('input:checkbox[name=badge1]');
    var inp1818   = $("#inp1818");
    var inp1919   = $("#inp1919");
    var inp2020   = $("#inp2020");
    var read      = $('input:checkbox[name=read]');
    var inp21     = $("#inp21");
    
    var badge2    = $("#badge2");
    var agro      = $('input:checkbox[name=agroprocessing]');
    var renew     = $('input:checkbox[name=renewable]');
    var mineral   = $('input:checkbox[name=minerals]');
    var pharma    = $('input:checkbox[name=pharmaceuticals]');
    var manufac   = $('input:checkbox[name=manufacturing]');
    var constr    = $('input:checkbox[name=construction]');
    var logist    = $('input:checkbox[name=logistics]');
    var tour      = $('input:checkbox[name=tourism]');
    var ict       = $('input:checkbox[name=ict]');
    var fin       = $('input:checkbox[name=financial]');
    
    if(input.val()) {
        input.css("border","2px solid #70c254");
    }if(input2.val()) {
        input2.css("border","2px solid #70c254");
    }if(input3.val()) {
        input3.css("border","2px solid #70c254");
    }if(input333.val()) {
        input333.css("border","2px solid #70c254");
    }if(input3333.val()) {
        input3333.css("border","2px solid #70c254");
    }if(input4.val()) {
        input4.css("border","2px solid #70c254");
    }if(inputk.val()) {
        inputk.css("border","2px solid #70c254");
    }if(kantry11.val()) {
        kantry11.css("border","2px solid #70c254");
    }if(input5.val()) {
        input5.css("border","2px solid #70c254");
    }if(input50.val()) {
        input50.css("border","2px solid #70c254");
    }if(input6.val()) {
        input6.css("border","2px solid #70c254");
    }if(input7.val()) {
        input7.css("border","2px solid #70c254");
    }if(input8.val()) {
        input8.css("border","2px solid #70c254");
    }if(input9.val()) {
        input9.css("border","2px solid #70c254");
    }if(input10.val()) {
        input10.css("border","2px solid #70c254");
    }if(read.is(':checked')) {
        input11.css("border","2px solid #70c254");
    }if(input12.val()) {
        input12.css("border","2px solid #70c254");
    }if(input13.val()) {
        input13.css("border","2px solid #70c254");
    }if(inpt1.val()) {
        inpt1.css("border","2px solid #70c254");
    }if(inpt2.val()) {
        inpt2.css("border","2px solid #70c254");
    }if(inpt3.val()) {
        inpt3.css("border","2px solid #70c254");
    }if(inpt4.val()) {
        inpt4.css("border","2px solid #70c254");
    }if(inpt5.val()) {
        inpt5.css("border","2px solid #70c254");
    }if(inpt55.val()) {
        inpt55.css("border","2px solid #70c254");
    }if(inpt555.val()) {
        inpt555.css("border","2px solid #70c254");
    }if(inpt6.val()) {
        inpt6.css("border","2px solid #70c254");
    }if(inpt8.val()) {
        inpt8.css("border","2px solid #70c254");
    }if(inpt9.val()) {
        inpt9.css("border","2px solid #70c254");
    }if(pass.val()) {
        pass.css("border","2px solid #70c254");
    }
    
    if(inp1.val()){
        inp1.css("border","2px solid #70c254");
    }if(kant2.val()){
        kant2.css("border","2px solid #70c254");
    }if(inp3.val()){
        inp3.css("border","2px solid #70c254");
    }if(inp4.val()){
        inp4.css("border","2px solid #70c254");
    }if(inp5.val()){
        inp5.css("border","2px solid #70c254");
    }if(inp6.val()){
        inp6.css("border","2px solid #70c254");
    }if(inp66.val()){
        inp66.css("border","2px solid #70c254");
    }if(inp7.val()){
        inp7.css("border","2px solid #70c254");
    }if(inp8.val()){
        inp8.css("border","2px solid #70c254");
    }if(kantry.val()){
        kantry.css("border","2px solid #70c254");
    }if(inp10.val()){
        inp10.css("border","2px solid #70c254");
    }if(inp12.val()){
        inp12.css("border","2px solid #70c254");
    }if(kant13.val()){
        kant13.css("border","2px solid #70c254");
    }if(inp14.val()){
        inp14.css("border","2px solid #70c254");
    }if(inp16.val()){
        inp16.css("border","2px solid #70c254");
    }if(inp18.is(':checked')){
        inp1818.css("border","1px solid #70c254");
    }if(inp19.is(':checked')){
        inp1919.css("border","1px solid #70c254");
    }if(inp20.is(':checked')){
        inp2020.css("border","1px solid #70c254");
    }if(read.is(':checked')){
        inp21.css("border","1px solid #70c254");
    }
    
    if(agro.is(':checked') || renew.is(':checked') || mineral.is(':checked') || pharma.is(':checked') || manufac.is(':checked') || constr.is(':checked') || logist.is(':checked') || tour.is(':checked') || ict.is(':checked') || fin.is(':checked')){
        badge2.css("border","2px solid #ffffff");
    }
    
    
});

$('#inp1818, #inp1919, #inp2020').click(function(){
    
    var inp1818   = $("#inp1818");
    var inp1919   = $("#inp1919");
    var inp2020   = $("#inp2020");
    
    inp1818.css("border","1px solid #a3a3a3");
    inp1919.css("border","1px solid #a3a3a3");
    inp2020.css("border","1px solid #a3a3a3");
    
});
$('#inpt10').click(function(){
    
    var inpt10    = $("#inpt10");
    
    inpt10.css("border","1px solid #a3a3a3");
    
});
$('#upload').click(function(){
    
    var upload    = $("#upload");
    
    upload.css("border","2px solid #70c254");
    
});


$(document).on("click",function(e) {
    
    var input     = $("#input11");
    var input2    = $("#input22");
    var input3    = $("#input33");
    var input333  = $("#input333");
    var input3333 = $("#input3333");
    var input4    = $("#input44");
    var input50   = $("#input55"); 
    var inputk    = $("#kantry1");
    var input5    = $("#kantry");
    var kantry11  = $("#kantry11");
    var input6    = $("#input66");
    var input7    = $("#input77");
    var input8    = $("#input88");
    var input9    = $("#input99");
    var input10   = $("#input1010");
    var input11   = $("#input1111");
    var input12   = $("#input1212");
    var input13   = $("#input1313");
    var input44   = $("#input4444");
    var input55   = $("#input5555"); 
    var inpt1     = $("#inpt1");
    var inpt2     = $("#inpt2");
    var inpt3     = $("#inpt3");
    var inpt4     = $("#inpt4");
    var inpt5     = $("#inpt5");
    var inpt55    = $("#inpt55");
    var inpt555   = $("#inpt555");
    var inpt6     = $("#inpt6");
    var inpt8     = $("#inpt8");
    var inpt9     = $("#inpt9");
    var pass      = $("#passwordInput");

    var inp1      = $("#inp1");
    var kant2     = $("#kant2");
    var inp3      = $("#inp3");
    var inp4      = $("#inp4");
    var inp5      = $("#inp5");
    var inp6      = $("#inp6");
    var inp66     = $("#inp66");
    var inp7      = $("#inp7");
    var inp8      = $("#inp8");
    var kantry    = $("#kantry");
    var inp10     = $("#inp10");
    var inp12     = $("#inp12");
    var kant13    = $("#kant13");
    var inp14     = $("#inp14");
    var inpt10    = $("#inpt10");
    var inp16     = $("#inp16");
    var inp18     = $('input:checkbox[name=badge3]');
    var inp19     = $('input:checkbox[name=badge2]');
    var inp20     = $('input:checkbox[name=badge1]');
    var inp1818   = $("#inp1818");
    var inp1919   = $("#inp1919");
    var inp2020   = $("#inp2020");
    var read      = $('input:checkbox[name=read]');
    var inp21     = $("#inp21");
    
    var badge2    = $("#badge2");
    var agro      = $('input:checkbox[name=agroprocessing]');
    var renew     = $('input:checkbox[name=renewable]');
    var mineral   = $('input:checkbox[name=minerals]');
    var pharma    = $('input:checkbox[name=pharmaceuticals]');
    var manufac   = $('input:checkbox[name=manufacturing]');
    var constr    = $('input:checkbox[name=construction]');
    var logist    = $('input:checkbox[name=logistics]');
    var tour      = $('input:checkbox[name=tourism]');
    var ict       = $('input:checkbox[name=ict]');
    var fin       = $('input:checkbox[name=financial]');
    
    if(input.val()) {
        input.css("border","2px solid #70c254");
    }if(input2.val()) {
        input2.css("border","2px solid #70c254");
    }if(input3.val()) {
        input3.css("border","2px solid #70c254");
    }if(input333.val()) {
        input333.css("border","2px solid #70c254");
    }if(input3333.val()) {
        input3333.css("border","2px solid #70c254");
    }if(input4.val()) {
        input4.css("border","2px solid #70c254");
    }if(inputk.val()) {
        inputk.css("border","2px solid #70c254");
    }if(kantry11.val()) {
        kantry11.css("border","2px solid #70c254");
    }if(input5.val()) {
        input5.css("border","2px solid #70c254");
    }if(input50.val()) {
        input50.css("border","2px solid #70c254");
    }if(input6.val()) {
        input6.css("border","2px solid #70c254");
    }if(input7.val()) {
        input7.css("border","2px solid #70c254");
    }if(input8.val()) {
        input8.css("border","2px solid #70c254");
    }if(input9.val()) {
        input9.css("border","2px solid #70c254");
    }if(input10.val()) {
        input10.css("border","2px solid #70c254");
    }if(read.is(':checked')) {
        input11.css("border","2px solid #70c254");
    }if(input12.val()) {
        input12.css("border","2px solid #70c254");
    }if(input13.val()) {
        input13.css("border","2px solid #70c254");
    }if(inpt1.val()) {
        inpt1.css("border","2px solid #70c254");
    }if(inpt2.val()) {
        inpt2.css("border","2px solid #70c254");
    }if(inpt3.val()) {
        inpt3.css("border","2px solid #70c254");
    }if(inpt4.val()) {
        inpt4.css("border","2px solid #70c254");
    }if(inpt5.val()) {
        inpt5.css("border","2px solid #70c254");
    }if(inpt55.val()) {
        inpt55.css("border","2px solid #70c254");
    }if(inpt555.val()) {
        inpt555.css("border","2px solid #70c254");
    }if(inpt6.val()) {
        inpt6.css("border","2px solid #70c254");
    }if(inpt8.val()) {
        inpt8.css("border","2px solid #70c254");
    }if(inpt9.val()) {
        inpt9.css("border","2px solid #70c254");
    }if(pass.val()) {
        pass.css("border","2px solid #70c254");
    }
    
    if(inp1.val()){
        inp1.css("border","2px solid #70c254");
    }if(kant2.val()){
        kant2.css("border","2px solid #70c254");
    }if(inp3.val()){
        inp3.css("border","2px solid #70c254");
    }if(inp4.val()){
        inp4.css("border","2px solid #70c254");
    }if(inp5.val()){
        inp5.css("border","2px solid #70c254");
    }if(inp6.val()){
        inp6.css("border","2px solid #70c254");
    }if(inp66.val()){
        inp66.css("border","2px solid #70c254");
    }if(inp7.val()){
        inp7.css("border","2px solid #70c254");
    }if(inp8.val()){
        inp8.css("border","2px solid #70c254");
    }if(kantry.val()){
        kantry.css("border","2px solid #70c254");
    }if(inp10.val()){
        inp10.css("border","2px solid #70c254");
    }if(inp12.val()){
        inp12.css("border","2px solid #70c254");
    }if(kant13.val()){
        kant13.css("border","2px solid #70c254");
    }if(inp14.val()){
        inp14.css("border","2px solid #70c254");
    }if(inp16.val()){
        inp16.css("border","2px solid #70c254");
    }if(inp18.is(':checked')){
        inp1818.css("border","1px solid #70c254");
    }if(inp19.is(':checked')){
        inp1919.css("border","1px solid #70c254");
    }if(inp20.is(':checked')){
        inp2020.css("border","1px solid #70c254");
    }if(read.is(':checked')){
        inp21.css("border","1px solid #70c254");
    }
    
    if(agro.is(':checked') || renew.is(':checked') || mineral.is(':checked') || pharma.is(':checked') || manufac.is(':checked') || constr.is(':checked') || logist.is(':checked') || tour.is(':checked') || ict.is(':checked') || fin.is(':checked')){
        badge2.css("border","2px solid #ffffff");
    }
    
});

$("#kantry11, #kant2").on("click",function(e){
                    
    var kantry11 = $("#kantry11");
    var inpt2    = $("#inpt2");
    var kant2    = $("#kant2");
    var inp3     = $("#inp3");
                    
    if(kantry11.val() == 'Other' || kant2.val() == 'Other'){
        inpt2.css("display","block");
        inp3.css("display","block");
    }else{
        inpt2.css("display","none");
        kantry11.val() == '';
        
        inp3.css("display","none");
        kant2.val() == '';
    }
});

const textarea = document.getElementById('input1313');

textarea.addEventListener('input', autoResize);

function autoResize() {
    // Reset height to calculate scrollHeight correctly
    this.style.height = 'auto';
    // Set height to the scroll height
    this.style.height = `${this.scrollHeight}px`;
}

// Get the modal for hotel reservations
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn  = document.getElementById("myBtn");
var btns = document.getElementById("myBtns");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}
btns.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Get the modal for hotel reservations
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

//Preview uploaded photo before submission
function previewImage(event) {
    const file = event.target.files[0];
    const previewContainer = document.getElementById('previewContainer');

    // Clear previous preview
    previewContainer.innerHTML = '';

    if (file) {
        const img = document.createElement('img');
        img.src = URL.createObjectURL(file);
        img.alt = 'Image Preview';
        previewContainer.appendChild(img);
    }
}


            
/*//Reservations form 
$("#reserve").submit(function(event) {
    
    event.preventDefault(); // Prevents the default form submission

    var name    = $("input[name='name']").val();
    var email   = $("input[name='emails']").val();
    var country = $('#country').val();
    var phone   = $("input[name='phone']").val(); 
    var regista = $("input[name='registered']:checked").val();
    var year    = $('#year').val();
    var modals  = document.getElementById("myModal"); 
    
    $.ajax({
        url: 'includes/inc.sendreservation.php',
        type: 'POST',
        data: {
            name: name,
            email: email,
            country: country,
            phone: phone,
            regista: regista,
            year: year
        },
        success: function(result) {
            swal('Submission successfull!', 'You will receive updates on the email you provided.');
            //alert("You will now be redirected to the official Hotel & Travel partner's booking page.");
            //window.open("https://africanspicesafaris.com/tour/nairobi-budget-hotels?disc=ASDS25", "_blank");
            modals.style.display = "none";
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert("An error occurred: " + textStatus);
        }
    });
});*/















  
          
            