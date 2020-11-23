var figure=[], dostupnapolja=[], kontejner, polja=[], imenapolja=[];
class figura{
    constructor(boja, ime, x, y, e){
        this.boja= boja;
        this.ime=ime;
        this.x=x;
        this.y=y;
        this.e=e;
    }
}
class polje{
    constructor(id, element){
        this.id=id;
        this.element=element
    }
}
imenapolja=["jedan","dva","tri","cetiri","pet","sest","sedam","osam","devet","deset","jedanaest","dvanaest","trinaest","cetrnaest","petnaest","sesnaest","sedamnaest", "osamnaest", "devetnaest","dvadeset","dvadesetjedan","dvadesetdva","dvadesetri","dvadesetcetiri","dvadesetpet","dvadesetsest","dvadesetsedam","dvadesetosam","dvadesetdevet","trideset","tridesetjedan","tridesetdva","tridesettri","tridesetcetiri","tridesetpet","tridesetsest","tridesetsedam","tridesetosam","tridesetdevet","cetrdeset","cetrdesetjedan","cetrdesetdva","cetrdesettri","cetrdesetcetiri","cetrdesetpet","cetrdesetsest","cetrdesetsedam","cetrdesetosam","cetrdesetdevet","pedeset", "pedesetjedan","pedesetdva","pedesettri","pedesetcetiri","pedesetpet","pedesetsest","pedesetsedam", "pedesetosam", "pedesetdevet", "sesdeset", "sezdesetjedan", "sezdesetdva","sezdesettri","sezdesetcetiri"];
for (i=0; i<imenapolja.length; i++){

}
kontejner=document.getElementById("kontejner");
//crne-figure
CrniTopLevo= new figura("crna", "top", 0, 0, document.querySelector("#topcrnilevi"));
CrniKonjlevo= new figura("crna", "konj", 1, 0,  document.querySelector("#konjcrnilevi"));
CrniLovacLevo= new figura("crna", "lovac", 2, 0,  document.querySelector("#lovaccrnilevi"));
CrnaKraljica= new figura("crna", "kraljica", 3, 0,  document.querySelector("#kraljicacrna"));
CrniKralj= new figura("crna", "kralj", 4, 0,  document.querySelector("#kraljcrni"));
CrniLovacDesno= new figura("crna", "lovac", 5, 0, document.querySelector("#lovaccrnidesni"));
CrniKonjDesno= new figura("crna", "Konj", 6, 0,  document.querySelector("#konjcrnidesni"));
CrniTopDesno= new figura("crna", "top", 7, 0,  document.querySelector("#topcrnidesni"));
crniPesak0= new figura("crna", "pesak", 0, 1,  document.querySelector("#pesakcrni1"));
crniPesak1= new figura("crna", "pesak", 1, 1,  document.querySelector("#pesakcrni2"));
crniPesak2= new figura("crna", "pesak", 2, 1,  document.querySelector("#pesakcrni3"));
crniPesak3= new figura("crna", "pesak", 3, 1,  document.querySelector("#pesakcrni4"));
crniPesak4= new figura("crna", "pesak", 4, 1,  document.querySelector("#pesakcrni5"));
crniPesak5= new figura("crna", "pesak", 5, 1,  document.querySelector("#pesakcrni6"));
crniPesak6= new figura("crna", "pesak", 6, 1,  document.querySelector("#pesakcrni7"));
crniPesak7= new figura("crna", "pesak", 7, 1,  document.querySelector("#pesakcrni8"));
//bele figure
beliPesak0= new figura("bela", "pesak", 0, 6, document.querySelector("#pesakbeli1"));
beliPesak1= new figura("bela", "pesak", 1, 6, document.querySelector("#pesakbeli2"));
beliPesak2= new figura("bela", "pesak", 2, 6, document.querySelector("#pesakbeli3"));
beliPesak3= new figura("bela", "pesak", 3, 6, document.querySelector("#pesakbeli4"));
beliPesak4= new figura("bela", "pesak", 4, 6, document.querySelector("#pesakbeli5") );
beliPesak5= new figura("bela", "pesak", 5, 6, document.querySelector("#pesakbeli6"));
beliPesak6= new figura("bela", "pesak", 6, 6, document.querySelector("#pesakbeli7"));
beliPesak7= new figura("bela", "pesak", 7, 6, document.querySelector("#pesakbeli8"));
beliTopLevo= new figura("bela", "top", 0, 7, document.querySelector("#topbelilevi"));
beliKonjlevo= new figura("bela", "konj", 1, 7, document.querySelector("#konjbelilevi"));
beliLovacLevo= new figura("bela", "lovac", 2, 7, document.querySelector("#lovacbelilevi"));
belaKraljica= new figura("bela", "kraljica", 3, 7,  document.querySelector("#kraljicabela"));
beliKralj= new figura("bela", "kralj", 4, 7, document.querySelector("#kraljbeli"));
beliLovacDesno= new figura("bela", "lovac", 5, 7, document.querySelector("#lovacbelidesni"));
beliKonjDesno= new figura("bela", "Konj", 6, 7, document.querySelector("#konjbelidesni"));
beliTopDesno= new figura("bela", "top", 7, 7, document.querySelector("#topbelidesni"));
figure=[CrniTopLevo,CrniKonjlevo, CrniLovacLevo, CrnaKraljica, CrniKralj,
    CrniLovacDesno, CrniKonjDesno, CrniTopDesno, crniPesak0, crniPesak1, 
    crniPesak2, crniPesak3, crniPesak4, crniPesak5, crniPesak6, crniPesak7,
    beliPesak0, beliPesak1, beliPesak2, beliPesak3, beliPesak4, beliPesak5,
    beliPesak6, beliPesak7, beliTopLevo, beliKonjlevo, beliLovacLevo, belaKraljica, 
    beliKralj, beliLovacDesno, beliKonjDesno, beliTopDesno];
for (i=0; i<figure.length; i++){
    figure[i].e.addEventListener("click", select);
}
var odaberaniElement=0;
function select(){
    e=this;
    if(odaberaniElement==0){
        e.classList.toggle("selected");
        odaberaniElement=e;
        prikazidostupnapolja(e);
    }
    else if(odaberaniElement==e){
        e.classList.toggle("selected");
        odaberaniElement=0;
        odabranaFigura=0;
    }
    else{
        odaberaniElement.classList.toggle("selected");
        e.classList.toggle("selected");
        odaberaniElement=e;
        prikazidostupnapolja(e);
    }
}
function prikazidostupnapolja(element){
    var odabranaFigura = nadjiFiguru(element, figure);
    var roditelj= element.parentElement;
    console.log(document.getElementById("jedan").style.gridRowStart)
}
function nadjiFiguru(element, niz){
    for (var i=0; i < niz.length; i++) {
        if (niz[i].e === element) {
            return niz[i];
        }
    }
}