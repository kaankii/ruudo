function isMesajVal(frm)
{
  var m_realname = frm.m_realname.value;
  var m_telno = frm.m_telno.value;
  var mesajBtnGonder = document.querySelector("#mesaj-f-btnGonder");

  if ( m_realname==null || m_realname=="" )
  {
    document.getElementById('m_name_hata').style.display = 'inline-block';
    document.getElementById('m_tel_hata').style.display = 'none';
    document.getElementById('m_realname').focus();
    return false;
  } 
  if ( m_telno==null || m_telno=="" || m_telno.length < 11 )
  {  
    document.getElementById('m_name_hata').style.display = 'none';
    document.getElementById('m_tel_hata').style.display = 'inline-block';
    document.getElementById('m_telno').focus();
    return false;
  }
  else { 
    document.getElementById('m_name_hata').style.display = 'none'; 
    document.getElementById('m_tel_hata').style.display = 'none'; 

    document.getElementById('m-sayfaya-don-btn').disabled = true;
    document.getElementById('mesaj-f-btnGonder').disabled = true;
    document.getElementById('mesaj-f-btnGonder').classList.add('form-gonderiyor');
    document.getElementById('mesaj-f-btnGonder').innerHTML = 'Mesaj Gönderiliyor <i class="fa fa-cog fa-spin" aria-hidden="true"></i>';
  };
  return true;
};

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
};

function isEkmekVal(frm)
{
  var ekmek_telno = frm.ekmek_telno.value;
  var ekmek_tarih = frm.ekmek_tarih.value;
  var ekmekBtnGonder = document.querySelector("#ekmek-f-btnGonder");

  if ( ekmek_telno==null || ekmek_telno=="" || ekmek_telno.length < 11 )
  {  
    document.getElementById('ekmek_tarih_hata').style.display = 'none';
    document.getElementById('ekmek_tel_hata').style.display = 'inline-block';
    document.getElementById('ekmek_telno').focus();
    return false;
  }
  if ( ekmek_tarih==null || ekmek_tarih=="" || ekmek_tarih.length < 2 )
  {
    document.getElementById('ekmek_tarih_hata').style.display = 'inline-block';
    document.getElementById('ekmek_tel_hata').style.display = 'none';
    document.getElementById('ekmek_tarih').focus();
    return false;
  }
  else { 
    document.getElementById('ekmek_tel_hata').style.display = 'none'; 
    document.getElementById('ekmek_tarih_hata').style.display = 'none'; 

    document.getElementById('ekmek-don-btn').disabled = true;
    document.getElementById('ekmek-f-btnGonder').disabled = true;
    document.getElementById('ekmek-f-btnGonder').classList.add('form-gonderiyor');
    document.getElementById('ekmek-f-btnGonder').innerHTML = 'Talep Gönderiliyor <i class="fa fa-cog fa-spin" aria-hidden="true"></i>';
  };
  return true;
};
