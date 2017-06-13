function isFastVal(frm)
{
  var fullname = frm.fullname.value;
  var phone = frm.phone.value;

  if ( fullname==null || fullname=="" )
  {
    document.getElementById('f_name_hata').style.display = 'inline-block';
    document.getElementById('f_tel_hata').style.display = 'none';
    document.getElementById('f_realname').focus();
    return false;
  } 
  if ( phone==null || phone=="" || phone.length < 11 )
  {  
    document.getElementById('f_name_hata').style.display = 'none';
    document.getElementById('f_tel_hata').style.display = 'inline-block';
    document.getElementById('f_telefonno').focus();
    return false;
  }
  else { 
    document.getElementById('f_name_hata').style.display = 'none'; 
    document.getElementById('f_tel_hata').style.display = 'none'; 
    frm.submit.disabled = true;
    document.getElementById("fast-f-btnGonder").innerHTML = "Gönderiliyor <i class='fa fa-cog fa-spin fa-fw margin-bottom'></i>";   
    $( "#fast-f-btnGonder" ).addClass( "sending" );

    return true;
  };
  return true;
}

function isOnVal(frm)
{
  var fullname = frm.fullname.value;
  var phone = frm.phone.value;

  if ( fullname==null || fullname=="" )
  {
    document.getElementById('on_name_hata').style.display = 'inline-block';
    document.getElementById('on_tel_hata').style.display = 'none';
    document.getElementById('on_realname').focus();

    return false;
  } 
  if ( phone==null || phone=="" || phone.length < 11 )
  {  
    document.getElementById('on_name_hata').style.display = 'none';
    document.getElementById('on_tel_hata').style.display = 'inline-block';
    document.getElementById('on_telno').focus();
    return false;
  }
  else { 
    document.getElementById('on_name_hata').style.display = 'none'; 
    document.getElementById('on_tel_hata').style.display = 'none'; 
    frm.submit.disabled = true;
    document.getElementById("on-rezerv-btnGonder").innerHTML = "Gönderiliyor <i class='fa fa-cog fa-spin fa-fw margin-bottom'></i>";   
    $( "#on-rezerv-btnGonder" ).addClass( "sending" );
    return true;
  };
  return true;
}


function isMiceVal(frm)
{
  var mice_realname = frm.mice_realname.value;
  var mice_telno = frm.mice_telno.value;
  var mice_email = frm.mice_email.value;
  var toplantiBtnGonder = document.querySelector("#toplanti-btnGonder");

  if ( mice_realname==null || mice_realname=="" )
  {
    document.getElementById('mice_name_hata').style.display = 'inline-block';
    document.getElementById('mice_tel_hata').style.display = 'none';
    document.getElementById('mice_email_hata').style.display = 'none';
    document.getElementById('mice_realname').focus();
    return false;
  } 
  if ( mice_telno==null || mice_telno=="" || mice_telno.length < 11 )
  {  
    document.getElementById('mice_name_hata').style.display = 'none';
    document.getElementById('mice_tel_hata').style.display = 'inline-block';
    document.getElementById('mice_email_hata').style.display = 'none';
    document.getElementById('mice_telno').focus();
    return false;
  }
  if ( mice_email==null || mice_email=="" )
  {  
    document.getElementById('mice_name_hata').style.display = 'none';
    document.getElementById('mice_tel_hata').style.display = 'none';
    document.getElementById('mice_email_hata').style.display = 'inline-block';
    document.getElementById('mice_email').focus();
    return false;
  }
  else { 
    document.getElementById('mice_name_hata').style.display = 'none'; 
    document.getElementById('mice_tel_hata').style.display = 'none'; 
    document.getElementById('mice_email_hata').style.display = 'none';
    frm.submit.disabled = true;
    
    document.getElementById("toplanti-btnGonder").innerHTML = "Gönderiliyor <i class='fa fa-cog fa-spin fa-fw margin-bottom'></i>";   
    $( "#toplanti-btnGonder" ).addClass( "sending" );
    return true;

  };
  return true;
}
