
function isTalepVal(frm)
{
  var fast_realname = frm.f_realname.value;
  var fast_telno = frm.f_telno.value;
  var toplantiBtnGonder = document.querySelector("#fast-f-btnGonder");

  if ( fast_realname==null || fast_realname=="" )
  {
    document.getElementById('f_name_hata').style.display = 'inline-block';
    document.getElementById('f_tel_hata').style.display = 'none';
    document.getElementById('f_realname').focus();
    return false;
  } 
  if ( fast_telno==null || fast_telno=="" || fast_telno.length < 11 )
  {  
    document.getElementById('f_name_hata').style.display = 'none';
    document.getElementById('f_tel_hata').style.display = 'inline-block';
    document.getElementById('f_telno').focus();
    return false;
  }
  else { 
    document.getElementById('f_name_hata').style.display = 'none'; 
    document.getElementById('f_tel_hata').style.display = 'none'; 

    document.getElementById('sepete-don-son-btn').disabled = true;
    document.getElementById('fast-f-btnGonder').disabled = true;
    document.getElementById('fast-f-btnGonder').classList.add('form-gonderiyor');
    document.getElementById('fast-f-btnGonder').innerHTML = 'Talep Gönderiliyor <i class="fa fa-cog fa-spin" aria-hidden="true"></i>';
  };
  return true;
}