function calcularIdade(){
var inDate=document.getElementById('nascimento').value;
if(!inDate){document.getElementById('idade').value='';return;}
var hoje=new Date();var nasc=new Date(inDate);
var idade=hoje.getFullYear()-nasc.getFullYear();
var m=hoje.getMonth()-nasc.getMonth();
if(m<0||(m===0&&hoje.getDate()<nasc.getDate()))idade--;
document.getElementById('idade').value=idade;
}
document.addEventListener('DOMContentLoaded',function(){
var container=document.getElementById('experiencias');
container.querySelectorAll('.removeExp').forEach(function(btn){
btn.addEventListener('click',function(){this.closest('.exp-item').remove();});
});
var addBtn=document.getElementById('addExp');
if(addBtn){
addBtn.addEventListener('click',function(){
var div=document.createElement('div');
div.className='exp-item mb-2 p-2 border rounded bg-white';
div.innerHTML='\
<input name="empresa[]" class="form-control mb-1" placeholder="Empresa">\
<input name="cargo[]" class="form-control mb-1" placeholder="Cargo">\
<div class="d-flex gap-2">\
<input name="inicio[]" class="form-control" placeholder="Ano início">\
<input name="fim[]" class="form-control" placeholder="Ano fim ou Atual">\
</div>\
<textarea name="atividades[]" class="form-control mt-1" placeholder="Atividades (breve)"></textarea>\
<button type="button" class="btn btn-sm btn-outline-danger mt-2 removeExp">Remover</button>';
container.appendChild(div);
div.querySelector('.removeExp').addEventListener('click',function(){div.remove();});
});
}});