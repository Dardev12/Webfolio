const sr = ScrollReveal({ });

sr.reveal('.foo',{ origin:'top',
 distance:'50px',
 mobile:true,
 scale:0.5,
 duration: 2000 });


sr.reveal('.bar',{ duration: 2000, 
    distance:'50px',
    mobile:true,
    scale:0.5,});

sr.reveal('.lvl',{
    origin:'left',
    distance:'50px',
    mobile:true,
    scale:0.5,
    duration: 1000 
})

sr.reveal('.iphoto',{
    origin:'top',
    distance:'50px',
    mobile:true,
    scale:0.5,
    duration: 3000 
})