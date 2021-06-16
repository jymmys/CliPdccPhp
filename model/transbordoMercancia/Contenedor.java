/**
 * 
 */
package org.sieca.everis.pdcc.model.transbordoMercancia;

/**
 * @author ytorregl
 *
 */
public class Contenedor {
	
	private String estadoContenedor;
	private String numeroContenedor;
	private String numeroMarchamo;
	private String pais;
	private String tamanioContenedor;
	private String tipoContenedor;
	private double totalPeso;
	/**
	 * 
	 */
	public Contenedor() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param estadoContenedor
	 * @param numeroContenedor
	 * @param numeroMarchamo
	 * @param pais
	 * @param tamanioContenedor
	 * @param tipoContenedor
	 * @param totalPeso
	 */
	public Contenedor(String estadoContenedor, String numeroContenedor, String numeroMarchamo, String pais,
			String tamanioContenedor, String tipoContenedor, double totalPeso) {
		super();
		this.estadoContenedor = estadoContenedor;
		this.numeroContenedor = numeroContenedor;
		this.numeroMarchamo = numeroMarchamo;
		this.pais = pais;
		this.tamanioContenedor = tamanioContenedor;
		this.tipoContenedor = tipoContenedor;
		this.totalPeso = totalPeso;
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
	 * @return the numeroContenedor
	 */
	public String getNumeroContenedor() {
		return numeroContenedor;
	}
	/**
	 * @param numeroContenedor the numeroContenedor to set
	 */
	public void setNumeroContenedor(String numeroContenedor) {
		this.numeroContenedor = numeroContenedor;
	}
	/**
	 * @return the numeroMarchamo
	 */
	public String getNumeroMarchamo() {
		return numeroMarchamo;
	}
	/**
	 * @param numeroMarchamo the numeroMarchamo to set
	 */
	public void setNumeroMarchamo(String numeroMarchamo) {
		this.numeroMarchamo = numeroMarchamo;
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
	 * @return the tamanioContenedor
	 */
	public String getTamanioContenedor() {
		return tamanioContenedor;
	}
	/**
	 * @param tamanioContenedor the tamanioContenedor to set
	 */
	public void setTamanioContenedor(String tamanioContenedor) {
		this.tamanioContenedor = tamanioContenedor;
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
	 * @return the totalPeso
	 */
	public double getTotalPeso() {
		return totalPeso;
	}
	/**
	 * @param totalPeso the totalPeso to set
	 */
	public void setTotalPeso(double totalPeso) {
		this.totalPeso = totalPeso;
	}
	
	

	

}
