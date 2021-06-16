/**
 * 
 */
package org.sieca.everis.pdcc.model.oea;

import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * @author ytorregl
 *
 */
public class OperadorEconomicoCrearRq extends RequestBody{
	
	private Solicitante solicitante;
    private Resultado resultado;
	/**
	 * 
	 */
	public OperadorEconomicoCrearRq() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @return the solicitante
	 */
	public Solicitante getSolicitante() {
		return solicitante;
	}
	/**
	 * @param solicitante the solicitante to set
	 */
	public void setSolicitante(Solicitante solicitante) {
		this.solicitante = solicitante;
	}
	/**
	 * @return the resultado
	 */
	public Resultado getResultado() {
		return resultado;
	}
	/**
	 * @param resultado the resultado to set
	 */
	public void setResultado(Resultado resultado) {
		this.resultado = resultado;
	}
    
    

}
