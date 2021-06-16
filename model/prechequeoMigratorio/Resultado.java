/**
 * 
 */
package org.sieca.everis.pdcc.model.prechequeoMigratorio;

/**
 * @author ytorregl
 *
 */
public class Resultado {
	
	private String pais;
	private String repuestas;
	/**
	 * 
	 */
	public Resultado() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param pais
	 * @param repuestas
	 */
	public Resultado(String pais, String repuestas) {
		super();
		this.pais = pais;
		this.repuestas = repuestas;
	}
	/**
	 * @return the pais
	 */
	public String getPais() {
		return pais;
	}
	/**
	 * @param pais the pais to set
	 */
	public void setPais(String pais) {
		this.pais = pais;
	}
	/**
	 * @return the repuestas
	 */
	public String getRepuestas() {
		return repuestas;
	}
	/**
	 * @param repuestas the repuestas to set
	 */
	public void setRepuestas(String repuestas) {
		this.repuestas = repuestas;
	}
	
	

	
	
}
