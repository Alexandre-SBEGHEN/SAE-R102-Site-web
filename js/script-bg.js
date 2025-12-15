//Fonction d'écrêtage (clamp)
function clamp(x, min, max) {
    return Math.max(Math.min(x, max), min)
}

//Fonction d'interpolation améliorée (pas de valeurs négatives)
function lerp(a, b, x) {
    return a + clamp(x, 0, 1) * (b - a);
}

//Obtenir les valeur de rouge vert et bleu en partant du string du code hex (ex: 'ffffff' ou '#ffffff')
function hexstr_to_rgb(hexcode) {
    hexcode = hexcode.substring(1, hexcode.length);

    //Obtenir les valeurs de rgb sous string hexa
    red = hexcode.substring(0, 2);
    green = hexcode.substring(2, 4);
    blue = hexcode.substring(4, 6);

    //convertir l'hexa en entier
    red = parseInt(red, 16);
    green = parseInt(green, 16);
    blue = parseInt(blue, 16);

    //renvoyer les valeurs
    return [red, green, blue];
}

//Obtenir la valeur d'une variable d'une des classes
function get_variable_value_from_class(classname, varname) {
    //Trouver un élément qui a pour classe 'classname'
    const element = document.querySelector(classname);

    //Récupérer les styles de cet élément
    const styles = window.getComputedStyle(element);

    //Récupérer la valeur de la variable 'varname' de l'élément
    const value = styles.getPropertyValue(varname).trim();

    return value;
}
//Définir la valeur d'une variable d'une des classes
function set_variable_value_from_class(classname, varname, val) {
    //Trouver un élément qui a pour classe 'classname'
    const element = document.querySelector(classname);

    //Changer la valeur de la propriété 'varname' pour 'val'
    element.style.setProperty(varname, val);
}

//Obtenir le nom de la page actuelle
function get_page_name() {
    const path = window.location.pathname;

    const parts = path.split('/');

    const pagename = parts[parts.length - 1].split('.')[0];

    return pagename;
}

//Obtenir les couleurs d'arrière-plan ainsi que leur valeurs rgb
const background_color = {
    'first': {
        'start': hexstr_to_rgb(get_variable_value_from_class('body', '--bg-color-first-start')),
        'end': hexstr_to_rgb(get_variable_value_from_class('body', '--bg-color-first-end'))
    },
    'last': {
        'start': hexstr_to_rgb(get_variable_value_from_class('body', '--bg-color-last-start')),
        'end': hexstr_to_rgb(get_variable_value_from_class('body', '--bg-color-last-end'))
    }
}

//Modifier l'arrière plan avec le scroll (code issu de Extension_Anybody150 sur reddit puis remanié)
/* l'original
window.addEventListener("scroll", () => {
  let scrollPosition = window.scrollY / (document.body.scrollHeight - window.innerHeight);
  document.documentElement.style.setProperty("--accent-color", `rgb(${255 - scrollPosition * 255}, ${100 + scrollPosition * 100}, ${scrollPosition * 255})`);
});
*/
window.addEventListener('scroll', () => {
    let scroll_end_y = document.getElementById('history-of-brainrots').getBoundingClientRect().top + window.scrollY;
    let scroll_position = window.scrollY / /*(document.body.scrollHeight - window.innerHeight)*/scroll_end_y;
    
    //console.log(lerp(0, 1, scroll_position));

    //Couleur 1 du dégradé
    let bg_col_start_r = lerp(background_color['first']['start'][0], background_color['last']['start'][0], scroll_position);
    let bg_col_start_g = lerp(background_color['first']['start'][1], background_color['last']['start'][1], scroll_position);
    let bg_col_start_b = lerp(background_color['first']['start'][2], background_color['last']['start'][2], scroll_position);

    //Couleur 1 du dégradé
    let bg_col_end_r = lerp(background_color['first']['end'][0], background_color['last']['end'][0], scroll_position);
    let bg_col_end_g = lerp(background_color['first']['end'][1], background_color['last']['end'][1], scroll_position);
    let bg_col_end_b = lerp(background_color['first']['end'][2], background_color['last']['end'][2], scroll_position);
    
    set_variable_value_from_class('.body', '--bg-color-current-start', `rgb(${bg_col_start_r}, ${bg_col_start_g}, ${bg_col_start_b})`);
    set_variable_value_from_class('.body', '--bg-color-current-end', `rgb(${bg_col_end_r}, ${bg_col_end_g}, ${bg_col_end_b})`);
});