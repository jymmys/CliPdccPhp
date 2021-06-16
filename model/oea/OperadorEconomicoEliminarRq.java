/**
 * 
 */
package org.sieca.everis.pdcc.model.oea;

import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * @author ytorregl
 *
 */
public class OperadorEconomicoEliminarRq extends RequestBody{
	
	private String tipoDocumento;
    private String numeroDocumento;
	/**
	 * 
	 */
	public OperadorEconomicoEliminarRq() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @return the tipoDocumento
	 */
	public String getTipoDocumento() {
		return tipoDocumento;
	}
	/**
	 * @param tipoDocumento the tipoDocumento to set
	 */
	public void setTipoDocumento(String tipoDocumento) {
		this.tipoDocumento = tipoDocumento;
	}
	/**
	 * @return the numeroDocumento
	 */
	public String getNumeroDocumento() {
		return numeroDocumento;
	}
	/**
	 * @param numeroDocumento the numeroDocumento to set
	 */
	public void setNumeroDocumento(String numeroDocumento) {
		this.numeroDocumento = numeroDocumento;
	}
    
    

}
