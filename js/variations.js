



let my_variations = JSON.parse(variations.data)
console.log(my_variations);



class VariationManager {
  current_search = [];

  constructor(variations){
    this.all_variations = variations;
    this.container = document.querySelector('.copa_interaction_container')
    this.selectBoxes = [...this.container.querySelectorAll('.SelectBox')];
    this.__active_selectBoxes = [];
    this.add_to_cart_button = this.container.querySelector('.Add_to_cart')

    this.__deactivate_add_to_cart_button();

    let inputs = [...this.container.querySelectorAll('input')]
    inputs.map( input => {
      input.onchange = _ =>{ this.search() }
    });
    this.add_to_cart_button.onclick = _ => {this.add_to_cart()}

    for (var i = this.selectBoxes.length - 1; i > 0; i--) {
      this.__hide_and_clear_selectBox(this.selectBoxes[i]);
    }
  }


  search(){
    this.__internal_search()
    // si no hay ninguna opcion disponible vaciar selectBoxes uno a uno
    // del ultimo al primero hasta que haya mas de 0 opciones
    let no_option_found = this.current_search.length == 0;
    if (no_option_found) {
      this.__hide_and_clear_last_active_selectBox();
      this.search();
    }
    // si hay una sola opcion activar boton de añadir al carrito
    // y otros posibles cambios, textos, precio, etc.
    let unique_option_found = this.current_search.length == 1;
    if( unique_option_found ){
      this.__hide_and_clear_inactive_selectBoxes();
      this.__activate_add_to_cart_button();
    } else {
      this.__deactivate_add_to_cart_button();
    }
    // si hay mas de una opcion, mostrar el siguiente selectBox
    let more_options_found = this.current_search.length > 1;
    if (more_options_found) {
      this.__show_next_selectBox()
    }
  }


  __show_next_selectBox(){
    let select_to_show = this.selectBoxes.reduce((a, selectBox) => (
      a ? a : (!this.__active_selectBoxes.includes(selectBox) ? selectBox : false)
    ), false)
    this.__show_selectBox(select_to_show)
  }

  __hide_and_clear_last_active_selectBox(){
    let last = this.__active_selectBoxes.length - 1
    this.__hide_and_clear_selectBox(this.__active_selectBoxes[last]);
  }

  __hide_and_clear_inactive_selectBoxes(){
    let inactive_selectBoxes = this.selectBoxes.filter(x => x.querySelector('.selectBoxInput:checked').value == 0)
    inactive_selectBoxes.map(x => this.__hide_and_clear_selectBox(x))
  }
  __hide_and_clear_selectBox(selectBox){
    this.__hide_selectBox(selectBox);
    this.__clear_selectBox(selectBox);
  }
  __hide_selectBox(selectBox){ selectBox.style.display = 'none' }
  __clear_selectBox(selectBox){ selectBox.querySelector('input').click() }
  __show_selectBox(selectBox){ selectBox.style.display = 'grid' }



  __internal_search(){
    this.current_search = this.all_variations;
    this.__active_selectBoxes = this.selectBoxes.filter(x => x.querySelector('.selectBoxInput:checked').value != 0)

    // por cada select box != 0
    let selected = [...this.container.querySelectorAll('.selectBoxInput:checked:not([value="0"])')];
    selected.map( input => {
      let key   = input.dataset.key;
      let value = input.value;
      // eliminar de current search toda variacion que no tenga key = value
      this.current_search = this.current_search.filter(v => v.attributes[key] == value)
    })
  }

  __activate_add_to_cart_button(){
    // console.log(this.current_search);
    // let button = this.container.querySelector('.My_add_to_cart_button');
    let button       = this.add_to_cart_button;
    let variation = this.current_search[0];
    // console.log(variation.attributes);
    let test = Object.values(variation.attributes).map(x => (x == '') ? '-' : x)
    let variation_string = test.join(' ')
    // let variation_string = Object.values(variation.attributes).join(' ')
    // console.log(variation_string);

    button.dataset.variationId = variation.variation_id
    button.dataset.variation = variation_string
    button.innerText = "Añadir a la cesta";
    button.disabled = false;
  }

  __deactivate_add_to_cart_button(){
    // let button = this.container.querySelector('.My_add_to_cart_button');
    let button       = this.add_to_cart_button;
    button.dataset.variationId = '';
    button.dataset.variation = '';
    button.innerText = "Elige una opcion unica";
    button.disabled = true;
  }




  add_to_cart(){

    // console.log(this.current_search[0]);
    let attributes = this.current_search[0].attributes;
    for (const key in attributes) {
      attributes[key] = (attributes[key] == '') ? '-' : attributes[key];
    }



    let button       = this.add_to_cart_button;
    let parent       = button.parentElement;
    let product_id   = button.dataset.productId;
    let variation_id = button.dataset.variationId;
    let variation    = button.dataset.variation;
    let quantity     = parent.querySelector('.cuantosQantity').value


    if(!variation_id){
      alert('selecciona una opcion unica')
      return;
    }

    var formData = new FormData();
    formData.append( 'action', 'woocommerce_add_variation_to_cart' );
    formData.append( 'product_id', product_id );
    formData.append( 'variation_id', variation_id );
    formData.append( 'quantity', quantity );

    formData.append( 'variation', JSON.stringify(attributes));

    ajax2(formData).then( respuesta => {
      // c.log(respuesta);
      d.querySelector('.cart_butt_number').innerText = respuesta.count;
    });


  }
}











let variation_manager = new VariationManager(my_variations);
