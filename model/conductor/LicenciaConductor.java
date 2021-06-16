/**
 * 
 */
package org.sieca.everis.pdcc.model.conductor;

/**
 * @author ytorregl
 *
 */
public class LicenciaConductor {
	
	private String NUMERO_DE_LICENCIA;
	private String PAIS_DE_EMISION;
	/**
	 * 
	 */
	public LicenciaConductor() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param NUMERO_DE_LICENCIA
	 * @param PAIS_DE_EMISION
	 */
	public LicenciaConductor(String NUMERO_DE_LICENCIA, String PAIS_DE_EMISION) {
		super();
		this.NUMERO_DE_LICENCIA = NUMERO_DE_LICENCIA;
		this.PAIS_DE_EMISION = PAIS_DE_EMISION;
	}
	/**
	 * @return the NUMERO_DE_LICENCIA
	 */
	public String getNUMERO_DE_LICENCIA() {
		return NUMERO_DE_LICENCIA;
	}
	/**
	 * @param NUMERO_DE_LICENCIA the NUMERO_DE_LICENCIA to set
	 */
	public void setNUMERO_DE_LICENCIA(String NUMERO_DE_LICENCIA) {
		this.NUMERO_DE_LICENCIA = NUMERO_DE_LICENCIA;
	}
	/**
	 * @return the PAIS_DE_EMISION
	 */
	public String getPAIS_DE_EMISION() {
		return PAIS_DE_EMISION;
	}
	/**
	 * @param PAIS_DE_EMISION the PAIS_DE_EMISION to set
	 */
	public void setPAIS_DE_EMISION(String PAIS_DE_EMISION) {
		this.PAIS_DE_EMISION = PAIS_DE_EMISION;
	}
	
	

}
