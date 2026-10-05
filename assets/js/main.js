(function(){
  var b=document.querySelector('.burger'),n=document.getElementById('nav');
  if(b&&n)b.addEventListener('click',function(){var o=n.classList.toggle('open');b.setAttribute('aria-expanded',o?'true':'false');});
  // Anatomy hotspots
  var spots=document.querySelectorAll('.spot'),items=document.querySelectorAll('.ana-list li');
  function pick(i){spots.forEach(function(s,k){s.setAttribute('aria-pressed',k==i?'true':'false');});items.forEach(function(li,k){li.classList.toggle('on',k==i);});}
  spots.forEach(function(s,i){s.addEventListener('click',function(){pick(i);});});
  items.forEach(function(li,i){li.addEventListener('mouseenter',function(){pick(i);});});
  // Expanding leather panels
  var lps=document.querySelectorAll('.lp');
  lps.forEach(function(p){p.addEventListener('click',function(){lps.forEach(function(x){x.setAttribute('aria-expanded','false');});p.setAttribute('aria-expanded','true');});});
  // Cookie
  var c=document.getElementById('cookie'),v=null;try{v=localStorage.getItem('sm_cookie');}catch(e){}
  if(c&&!v)c.classList.add('show');
  document.querySelectorAll('[data-cookie]').forEach(function(x){x.addEventListener('click',function(){try{localStorage.setItem('sm_cookie',x.dataset.cookie);}catch(e){}c.classList.remove('show');});});
  var y=document.getElementById('year');if(y)y.textContent=new Date().getFullYear();
})();
