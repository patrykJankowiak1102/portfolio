window.addEventListener('scroll', () => {
    const arrow = document.querySelector<HTMLElement>('.arrow');
  
    if(arrow){
      if(window.scrollY > 80){
        arrow.style.display = 'none';
      }else{
        arrow.style.display = 'block';
      }
    }
});  