    let sidebar = document.querySelector('.user--sidebar');
    let sidebar_toggler = document.querySelector('.sidebar--toggler');
    let line = document.querySelector('.line');
    sidebar_toggler.onclick = () =>{
        sidebar.classList.toggle('show');
    }
    line.onclick = () =>{
        sidebar.classList.toggle('show');
    }
    let tabs = document.querySelectorAll('.tab-name');
    let tab_content = document.querySelectorAll('.tab-content');

    for(let i = 0; i < tabs.length; i++){
        (function(index){
            tabs[i].onclick = ()=>{
                for(let x = 0; x < tab_content.length; x++){
                    tabs[x].classList.remove('active');
                    tab_content[x].classList.remove('show');
                    tabs[index].classList.add('active');
                    tab_content[index].classList.add('show');
                }
            }
        })(i)
    }

