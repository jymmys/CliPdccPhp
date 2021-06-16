/**
 * 
 */
package org.sieca.everis.pdcc.model.manifiestoCarga;

/**
 * @author ytorregl
 *
 */
public class ManifiestoDescarga {
	
	private String numeroManifiesto;
	private String codigoArancelario;
	private String descripcion;
	private String fechaPrevistaLlegada;
	private double pesoBruto;
	/**
	 * 
	 */
	public ManifiestoDescarga() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param numeroManifiesto
	 * @param codigoArancelario
	 * @param descripcion
	 * @param fechaPrevistaLlegada
	 * @param pesoBruto
	 */
	public ManifiestoDescarga(String numeroManifiesto, String codigoArancelario, String descripcion,
			String fechaPrevistaLlegada, double pesoBruto) {
		super();
		this.numeroManifiesto = numeroManifiesto;
		this.codigoArancelario = codigoArancelario;
		this.descripcion = descripcion;
		this.fechaPrevistaLlegada = fechaPrevistaLlegada;
		this.pesoBruto = pesoBruto;
	}
	/**
	 * @return the numeroManifiesto
	 */
	public String getNumeroManifiesto() {
		return numeroManifiesto;
	}
	/**
	 * @param numeroManifiesto the numeroManifiesto to set
	 */
	public void setNumeroManifiesto(String numeroManifiesto) {
		this.numeroManifiesto = numeroManifiesto;
	}
	/**
	 * @return the codigoArancelario
	 */
	public String getCodigoArancelario() {
		return codigoArancelario;
	}
	/**
	 * @param codigoArancelario the codigoArancelario to set
	 */
	public void setCodigoArancelario(String codigoArancelario) {
		this.codigoArancelario = codigoArancelario;
	}
	/**
	 * @return the descripcion
	 */
	public String getDescripcion() {
		return descripcion;
	}
	/**
	 * @param descripcion the descripcion to set
	 */
	public void setDescripcion(String descripcion) {
		this.descripcion = descripcion;
	}
	/**
	 * @return the fechaPrevistaLlegada
	 */
	public String getFechaPrevistaLlegada() {
		return fechaPrevistaLlegada;
	}
	/**
	 * @param fechaPrevistaLlegada the fechaPrevistaLlegada to set
	 */
	public void setFechaPrevistaLlegada(String fechaPrevistaLlegada) {
		this.fechaPrevistaLlegada = fechaPrevistaLlegada;
	}
	/**
	 * @return the pesoBruto
	 */
	public double getPesoBruto() {
		return pesoBruto;
	}
	/**
	 * @param pesoBruto the pesoBruto to set
	 */
	public void setPesoBruto(double pesoBruto) {
		this.pesoBruto = pesoBruto;
	}
	
	

}
