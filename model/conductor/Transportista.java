/**
 * 
 */
package org.sieca.everis.pdcc.model.conductor;

/**
 * @author lmoremos
 *
 */
public class Transportista {

	
	private String CODIGO_TRANSPORTISTA;
	private String TIPO_DOCUMENTO;
	private String NUMERO_IDENTIFICACION;
	private String RAZON_SOCIAL;
	/**
	 * 
	 */
	public Transportista() {
		super();
	}
	/**
	 * @param CODIGO_TRANSPORTISTA
	 * @param TIPO_DOCUMENTO
	 * @param NUMERO_IDENTIFICACION
	 * @param RAZON_SOCIAL
	 */
	public Transportista(String CODIGO_TRANSPORTISTA, String TIPO_DOCUMENTO, String NUMERO_IDENTIFICACION,
			String RAZON_SOCIAL) {
		this.CODIGO_TRANSPORTISTA = CODIGO_TRANSPORTISTA;
		this.TIPO_DOCUMENTO = TIPO_DOCUMENTO;
		this.NUMERO_IDENTIFICACION = NUMERO_IDENTIFICACION;
		this.RAZON_SOCIAL = RAZON_SOCIAL;
	}
	/**
	 * @return the CODIGO_TRANSPORTISTA
	 */
	public String getCODIGO_TRANSPORTISTA() {
		return CODIGO_TRANSPORTISTA;
	}
	/**
	 * @param CODIGO_TRANSPORTISTA the CODIGO_TRANSPORTISTA to set
	 */
	public void setCODIGO_TRANSPORTISTA(String CODIGO_TRANSPORTISTA) {
		this.CODIGO_TRANSPORTISTA = CODIGO_TRANSPORTISTA;
	}
	/**
	 * @return the TIPO_DOCUMENTO
	 */
	public String getTIPO_DOCUMENTO() {
		return TIPO_DOCUMENTO;
	}
	/**
	 * @param TIPO_DOCUMENTO the TIPO_DOCUMENTO to set
	 */
	public void setTIPO_DOCUMENTO(String TIPO_DOCUMENTO) {
		this.TIPO_DOCUMENTO = TIPO_DOCUMENTO;
	}
	/**
	 * @return the NUMERO_IDENTIFICACION
	 */
	public String getNUMERO_IDENTIFICACION() {
		return NUMERO_IDENTIFICACION;
	}
	/**
	 * @param NUMERO_IDENTIFICACION the NUMERO_IDENTIFICACION to set
	 */
	public void setNUMERO_IDENTIFICACION(String NUMERO_IDENTIFICACION) {
		this.NUMERO_IDENTIFICACION = NUMERO_IDENTIFICACION;
	}
	/**
	 * @return the RAZON_SOCIAL
	 */
	public String getRAZON_SOCIAL() {
		return RAZON_SOCIAL;
	}
	/**
	 * @param RAZON_SOCIAL the RAZON_SOCIAL to set
	 */
	public void setRAZON_SOCIAL(String RAZON_SOCIAL) {
		this.RAZON_SOCIAL = RAZON_SOCIAL;
	}
	
}
