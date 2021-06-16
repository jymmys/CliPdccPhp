/**
 * 
 */
package org.sieca.everis.pdcc.model.permiso.fitosanitario;

/**
 * @author ytorregl
 *
 */
public class Detalle {
	
	private double numeroLinea;
	private double cantidad;
	private String empaqueEmbalaje;
	private String descripcion;
	private String usoPrevisto;
	private String nombreCientifico;
	private String categoriaUAC;
	private double pesoBruto;
	private double pesoNeto;
	/**
	 * 
	 */
	public Detalle() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param numeroLinea
	 * @param cantidad
	 * @param empaqueEmbalaje
	 * @param descripcion
	 * @param usoPrevisto
	 * @param nombreCientifico
	 * @param categoriaUAC
	 * @param pesoBruto
	 * @param pesoNeto
	 */
	public Detalle(double numeroLinea, double cantidad, String empaqueEmbalaje, String descripcion, String usoPrevisto,
			String nombreCientifico, String categoriaUAC, double pesoBruto, double pesoNeto) {
		super();
		this.numeroLinea = numeroLinea;
		this.cantidad = cantidad;
		this.empaqueEmbalaje = empaqueEmbalaje;
		this.descripcion = descripcion;
		this.usoPrevisto = usoPrevisto;
		this.nombreCientifico = nombreCientifico;
		this.categoriaUAC = categoriaUAC;
		this.pesoBruto = pesoBruto;
		this.pesoNeto = pesoNeto;
	}
	/**
	 * @return the numeroLinea
	 */
	public double getNumeroLinea() {
		return numeroLinea;
	}
	/**
	 * @param numeroLinea the numeroLinea to set
	 */
	public void setNumeroLinea(double numeroLinea) {
		this.numeroLinea = numeroLinea;
	}
	/**
	 * @return the cantidad
	 */
	public double getCantidad() {
		return cantidad;
	}
	/**
	 * @param cantidad the cantidad to set
	 */
	public void setCantidad(double cantidad) {
		this.cantidad = cantidad;
	}
	/**
	 * @return the empaqueEmbalaje
	 */
	public String getEmpaqueEmbalaje() {
		return empaqueEmbalaje;
	}
	/**
	 * @param empaqueEmbalaje the empaqueEmbalaje to set
	 */
	public void setEmpaqueEmbalaje(String empaqueEmbalaje) {
		this.empaqueEmbalaje = empaqueEmbalaje;
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
	 * @return the usoPrevisto
	 */
	public String getUsoPrevisto() {
		return usoPrevisto;
	}
	/**
	 * @param usoPrevisto the usoPrevisto to set
	 */
	public void setUsoPrevisto(String usoPrevisto) {
		this.usoPrevisto = usoPrevisto;
	}
	/**
	 * @return the nombreCientifico
	 */
	public String getNombreCientifico() {
		return nombreCientifico;
	}
	/**
	 * @param nombreCientifico the nombreCientifico to set
	 */
	public void setNombreCientifico(String nombreCientifico) {
		this.nombreCientifico = nombreCientifico;
	}
	/**
	 * @return the categoriaUAC
	 */
	public String getCategoriaUAC() {
		return categoriaUAC;
	}
	/**
	 * @param categoriaUAC the categoriaUAC to set
	 */
	public void setCategoriaUAC(String categoriaUAC) {
		this.categoriaUAC = categoriaUAC;
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
	/**
	 * @return the pesoNeto
	 */
	public double getPesoNeto() {
		return pesoNeto;
	}
	/**
	 * @param pesoNeto the pesoNeto to set
	 */
	public void setPesoNeto(double pesoNeto) {
		this.pesoNeto = pesoNeto;
	}

	

}
