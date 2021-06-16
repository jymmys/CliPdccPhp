/**
 * 
 */
package org.sieca.everis.pdcc.model.transbordoMercancia;

/**
 * @author ytorregl
 *
 */
public class Articulo {
	
	private double cantidad;
	private double cantidadUnidad;
	private String codigoArancelario;
	private String descripcion;
	private String descripcionMercancia;
	private String numero;
	private String pais;
	private double pesoBrutoMercancia;
	private String tipoCarga;
	private double valorFob;
	private double volumenBruto;
	/**
	 * 
	 */
	public Articulo() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param cantidad
	 * @param cantidadUnidad
	 * @param codigoArancelario
	 * @param descripcion
	 * @param descripcionMercancia
	 * @param numero
	 * @param pais
	 * @param pesoBrutoMercancia
	 * @param tipoCarga
	 * @param valorFob
	 * @param volumenBruto
	 */
	public Articulo(double cantidad, double cantidadUnidad, String codigoArancelario, String descripcion,
			String descripcionMercancia, String numero, String pais, double pesoBrutoMercancia, String tipoCarga,
			double valorFob, double volumenBruto) {
		super();
		this.cantidad = cantidad;
		this.cantidadUnidad = cantidadUnidad;
		this.codigoArancelario = codigoArancelario;
		this.descripcion = descripcion;
		this.descripcionMercancia = descripcionMercancia;
		this.numero = numero;
		this.pais = pais;
		this.pesoBrutoMercancia = pesoBrutoMercancia;
		this.tipoCarga = tipoCarga;
		this.valorFob = valorFob;
		this.volumenBruto = volumenBruto;
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
	 * @return the cantidadUnidad
	 */
	public double getCantidadUnidad() {
		return cantidadUnidad;
	}
	/**
	 * @param cantidadUnidad the cantidadUnidad to set
	 */
	public void setCantidadUnidad(double cantidadUnidad) {
		this.cantidadUnidad = cantidadUnidad;
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
	 * @return the descripcionMercancia
	 */
	public String getDescripcionMercancia() {
		return descripcionMercancia;
	}
	/**
	 * @param descripcionMercancia the descripcionMercancia to set
	 */
	public void setDescripcionMercancia(String descripcionMercancia) {
		this.descripcionMercancia = descripcionMercancia;
	}
	/**
	 * @return the numero
	 */
	public String getNumero() {
		return numero;
	}
	/**
	 * @param numero the numero to set
	 */
	public void setNumero(String numero) {
		this.numero = numero;
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
	 * @return the pesoBrutoMercancia
	 */
	public double getPesoBrutoMercancia() {
		return pesoBrutoMercancia;
	}
	/**
	 * @param pesoBrutoMercancia the pesoBrutoMercancia to set
	 */
	public void setPesoBrutoMercancia(double pesoBrutoMercancia) {
		this.pesoBrutoMercancia = pesoBrutoMercancia;
	}
	/**
	 * @return the tipoCarga
	 */
	public String getTipoCarga() {
		return tipoCarga;
	}
	/**
	 * @param tipoCarga the tipoCarga to set
	 */
	public void setTipoCarga(String tipoCarga) {
		this.tipoCarga = tipoCarga;
	}
	/**
	 * @return the valorFob
	 */
	public double getValorFob() {
		return valorFob;
	}
	/**
	 * @param valorFob the valorFob to set
	 */
	public void setValorFob(double valorFob) {
		this.valorFob = valorFob;
	}
	/**
	 * @return the volumenBruto
	 */
	public double getVolumenBruto() {
		return volumenBruto;
	}
	/**
	 * @param volumenBruto the volumenBruto to set
	 */
	public void setVolumenBruto(double volumenBruto) {
		this.volumenBruto = volumenBruto;
	}
	
	
	

}
