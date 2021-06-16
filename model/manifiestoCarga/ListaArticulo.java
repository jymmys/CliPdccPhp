/**
 * 
 */
package org.sieca.everis.pdcc.model.manifiestoCarga;

import java.util.List;

/**
 * @author ytorregl
 *
 */
public class ListaArticulo {
	
	private String numero;
	private String descripcion;
	private String codigoArancelario;
	private String paisOrigen;
	private String tipoCarga;
	private double cantidadUnidades;
	private double cantidadCargada;
	private double pesoBruto;
	private double volumenBruto;
	private double valorDeclarado;
	private String codigoMercanciaPeligrosa;
	private List<DetalleArticulo> detallesArticulos;
	/**
	 * 
	 */
	public ListaArticulo() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param numero
	 * @param descripcion
	 * @param codigoArancelario
	 * @param paisOrigen
	 * @param tipoCarga
	 * @param cantidadUnidades
	 * @param cantidadCargada
	 * @param pesoBruto
	 * @param volumenBruto
	 * @param valorDeclarado
	 * @param codigoMercanciaPeligrosa
	 * @param detallesArticulos
	 */
	public ListaArticulo(String numero, String descripcion, String codigoArancelario, String paisOrigen,
			String tipoCarga, double cantidadUnidades, double cantidadCargada, double pesoBruto, double volumenBruto,
			double valorDeclarado, String codigoMercanciaPeligrosa, List<DetalleArticulo> detallesArticulos) {
		super();
		this.numero = numero;
		this.descripcion = descripcion;
		this.codigoArancelario = codigoArancelario;
		this.paisOrigen = paisOrigen;
		this.tipoCarga = tipoCarga;
		this.cantidadUnidades = cantidadUnidades;
		this.cantidadCargada = cantidadCargada;
		this.pesoBruto = pesoBruto;
		this.volumenBruto = volumenBruto;
		this.valorDeclarado = valorDeclarado;
		this.codigoMercanciaPeligrosa = codigoMercanciaPeligrosa;
		this.detallesArticulos = detallesArticulos;
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
	 * @return the paisOrigen
	 */
	public String getPaisOrigen() {
		return paisOrigen;
	}
	/**
	 * @param paisOrigen the paisOrigen to set
	 */
	public void setPaisOrigen(String paisOrigen) {
		this.paisOrigen = paisOrigen;
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
	 * @return the cantidadUnidades
	 */
	public double getCantidadUnidades() {
		return cantidadUnidades;
	}
	/**
	 * @param cantidadUnidades the cantidadUnidades to set
	 */
	public void setCantidadUnidades(double cantidadUnidades) {
		this.cantidadUnidades = cantidadUnidades;
	}
	/**
	 * @return the cantidadCargada
	 */
	public double getCantidadCargada() {
		return cantidadCargada;
	}
	/**
	 * @param cantidadCargada the cantidadCargada to set
	 */
	public void setCantidadCargada(double cantidadCargada) {
		this.cantidadCargada = cantidadCargada;
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
	/**
	 * @return the valorDeclarado
	 */
	public double getValorDeclarado() {
		return valorDeclarado;
	}
	/**
	 * @param valorDeclarado the valorDeclarado to set
	 */
	public void setValorDeclarado(double valorDeclarado) {
		this.valorDeclarado = valorDeclarado;
	}
	/**
	 * @return the codigoMercanciaPeligrosa
	 */
	public String getCodigoMercanciaPeligrosa() {
		return codigoMercanciaPeligrosa;
	}
	/**
	 * @param codigoMercanciaPeligrosa the codigoMercanciaPeligrosa to set
	 */
	public void setCodigoMercanciaPeligrosa(String codigoMercanciaPeligrosa) {
		this.codigoMercanciaPeligrosa = codigoMercanciaPeligrosa;
	}
	/**
	 * @return the detallesArticulos
	 */
	public List<DetalleArticulo> getDetallesArticulos() {
		return detallesArticulos;
	}
	/**
	 * @param detallesArticulos the detallesArticulos to set
	 */
	public void setDetallesArticulos(List<DetalleArticulo> detallesArticulos) {
		this.detallesArticulos = detallesArticulos;
	}
	
	

	

}
