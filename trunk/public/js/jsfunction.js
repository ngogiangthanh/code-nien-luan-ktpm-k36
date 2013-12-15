/*
 * Trang: jsfunction.js
 * 
 * Nguoi sua doi: Hitler 
 * 
 * Ngay viet: 28/10/2012
 * 
 * Chuc nang: Cac ham javascript duoc su dung trong web
 * 
 * Lan sua cuoi cung: 07/11/2012
 * 
 * Li do sua: Them ham
 * 
 * Nguoi sua: Hitler
 * 
 */
// Kiem tra la so
function isNumber(str){
    var re=/^[0-9]+$/;
    if(str.match(re)) return true;   
    else return false;
}
//trim
function trim(str){
    return str.replace(/^[\s]+/,"").replace(/[\s]+$/,"").replace(/[\s]{2,}/," ");
}
//check Email
function checkEmail(str)
{
   var rel1=/^[a-zA-Z]+[a-zA-Z0-9._]*(@)[a-zA-Z0-9]+[a-zA-Z0-9_.]*(\.)[a-zA-Z]{2,4}$/;//ab1234@a9.a3
   var rel2=/[.]{2,}/;
   var rel3=/(\.@)/;
   var rel4=/(@\.)/;
   if(!str.match(rel1))
       {
        return false;   
       }
       
  if(str.match(rel2) || str.match(rel3) || str.match(rel4))
      {
          return false;
      }
      return true;
}
function isSpeacialChar(str)
{
    var re=/^[^~`!@#\\$%\\^&*=\\{\\}|\\\\|'"<>?]+$/;//cac ky tu khong cho phep
    return str.match(re);
}
function checkNumPhone(str)
{
    var re=/^[\s,.()0-9]+$/;
    var re1=/[.]{2,}/;
    var re2=/[,]{2,}/;
    var re3=/[(]{2,}/;
    var re4=/[)]{2,}/;
    if(!str.match(re))
        {
         return false;   
        }
    if(str.match(re1)||str.match(re2)||str.match(re3)||str.match(re4))
        {
            return false;
        }
        return true;
}
function checkNamSinh(str){
    var re = /^19[0-9]{2}(-)[0-9]{2}(-)[0-9]{2}$/
    if(str.match(re))
        return true;
    else return false;
}