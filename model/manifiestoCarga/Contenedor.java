/**
 * 
 */
package org.sieca.everis.pdcc.model.manifiestoCarga;

/**
 * @author ytorregl
 *
 */
public class Contenedor {
	
	private String idContenedor;
	private String codigoIso;
	private String tipoContenedor;
	private String tamanoContenedor;
	private String estadoContenedor;
	private double peso;
	private double numeroMarchamo;
	/**
	 * 
	 */
	public Contenedor() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param idContenedor
	 * @param codigoIso
	 * @param tipoContenedor
	 * @param tamanoContenedor
	 * @param estadoContenedor
	 * @param peso
	 * @param numeroMarchamo
	 */
	public Contenedor(String idContenedor, String codigoIso, String tipoContenedor, String tamanoContenedor,
			String estadoContenedor, double peso, double numeroMarchamo) {
		super();
		this.idContenedor = idContenedor;
		this.codigoIso = codigoIso;
		this.tipoContenedor = tipoContenedor;
		this.tamanoContenedor = tamanoContenedor;
		this.estadoContenedor = estadoContenedor;
		this.peso = peso;
		this.numeroMarchamo = numeroMarchamo;
	}
	/**
	 * @return the idContenedor
	 */
	public String getIdContenedor() {
		return idContenedor;
	}
	/**
	 * @param idContenedor the idContenedor to set
	 */
	public void setIdContenedor(String idContenedor) {
		this.idContenedor = idContenedor;
	}
	/**
	 * @return the codigoIso
	 */
	public String getCodigoIso() {
		return codigoIso;
	}
	/**
	 * @param codigoIso the codigoIso to set
	 */
	public void setCodigoIso(String codigoIso) {
		this.codigoIso = codigoIso;
	}
	/**
	 * @return the tipoContenedor
	 */
	public String getTipoContenedor() {
		return tipoContenedor;
	}
	/**
	 * @param tipoContenedor the tipoContenedor to set
	 */
	public void setTipoContenedor(String tipoContenedor) {
		this.tipoContenedor = tipoContenedor;
	}
	/**
	 * @return the tamanoContenedor
	 */
	public String getTamanoContenedor() {
		return tamanoContenedor;
	}
	/**
	 * @param tamanoContenedor the tamanoContenedor to set
	 */
	public void setTamanoContenedor(String tamanoContenedor) {
		this.tamanoContenedor = tamanoContenedor;
	}
	/**
	 * @return the estadoContenedor
	 */
	public String getEstadoContenedor() {
		return estadoContenedor;
	}
	/**
	 * @param estadoContenedor the estadoContenedor to set
	 */
	public void setEstadoContenedor(String estadoContenedor) {
		this.estadoContenedor = estadoContenedor;
	}
	/**
	 * @return the peso
	 */
	public double getPeso() {
		return peso;
	}
	/**
	 * @param peso the peso to set
	 */
	public void setPeso(double peso) {
		this.peso = peso;
	}
	/**
	 * @return the numeroMarchamo
	 */
	public double getNumeroMarchamo() {
		return numeroMarchamo;
	}
	/**
	 * @param numeroMarchamo the numeroMarchamo to set
	 */
	public void setNumeroMarchamo(double numeroMarchamo) {
		this.numeroMarchamo = numeroMarchamo;
	}
	
	
	
	

}
