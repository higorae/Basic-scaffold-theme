/*
 *  Project: 
 *  Description: 
 *  Author: 
 *  License: 
 */


// o ponto-e-vírgula antes de invocar a função é uma prática segura contra scripts
// concatenados e/ou outros plugins que não foram fechados corretamente.
;(function ( $, window, undefined ) {

  // 'undefined' é usado aqui como a variável global 'undefined', no ECMAScript 3 é
  // mutável (ou seja, pode ser alterada por alguém). 'undefined' não está sendo
  // passado na verdade, assim podemos assegurar que o valor é realmente indefinido.
  // No ES5, 'undefined' não pode mais ser modificado.

  // 'window' e 'document' são passados como variáveis locais ao invés de globais,
  // assim aceleramos (ligeiramente) o processo de resolução e pode ser mais eficiente
  // quando minificado (especialmente quando ambos estão referenciados corretamente).

  // Cria as propriedades padrão
  var pluginName = 'test',
      document = window.document,
      defaults = {
        propertyName: "value"
      };

  // O verdadeiro construtor do plugin
  function Plugin( element, options ) {
    this.element = element;

    // jQuery tem um método 'extend' que mescla o conteúdo de dois ou
    // mais objetos, armazenando o resultado no primeiro objeto. O primeiro
    // objeto geralmente é vazio já que não queremos alterar os valores 
    // padrão para futuras instâncias do plugin
    this.options = $.extend( {}, defaults, options) ;

    this._defaults = defaults;
    this._name = pluginName;

    this.init();
  }

  Plugin.prototype.init = function () {
    // Coloque a lógica de inicialização aqui
    // Você já possui acesso ao elemento do DOM e as opções da instância
    // exemplo: this.element e this.options
	
  };

  // Um invólucro realmente leve em torno do construtor,
  // prevenindo contra criação de múltiplas instâncias
  $.fn[pluginName] = function ( options ) {
	this.init();
    // return this.each(function () {
    //       if (!$.data(this, 'plugin_' + pluginName)) {
    //         $.data(this, 'plugin_' + pluginName, new Plugin( this, options ));
    //       }
    //     });
  }

}(jQuery, window));