/**
 * 
 */
package org.sieca.everis.pdcc.model.manifiestoCarga;

/**
 * @author ytorregl
 *
 */
public class DetalleArticulo {
	
	private String numeroDUCAImpo;
	private String paisDestino;
	private String fechaDescarga;
	private double pesoBrutoDescargado;
	/**
	 * 
	 */
	public DetalleArticulo() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param numeroDUCAImpo
	 * @param paisDestino
	 * @param fechaDescarga
	 * @param pesoBrutoDescargado
	 */
	public DetalleArticulo(String numeroDUCAImpo, String paisDestino, String fechaDescarga,
			double pesoBrutoDescargado) {
		super();
		this.numeroDUCAImpo = numeroDUCAImpo;
		this.paisDestino = paisDestino;
		this.fechaDescarga = fechaDescarga;
		this.pesoBrutoDescargado = pesoBrutoDescargado;
	}
	/**
	 * @return the numeroDUCAImpo
	 */
	public String getNumeroDUCAImpo() {
		return numeroDUCAImpo;
	}
	/**
	 * @param numeroDUCAImpo the numeroDUCAImpo to set
	 */
	public void setNumeroDUCAImpo(String numeroDUCAImpo) {
		this.numeroDUCAImpo = numeroDUCAImpo;
	}
	/**
	 * @return the paisDestino
	 */
	public String getPaisDestino() {
		return paisDestino;
	}
	/**
	 * @param paisDestino the paisDestino to set
	 */
	public void setPaisDestino(String paisDestino) {
		this.paisDestino = paisDestino;
	}
	/**
	 * @return the fechaDescarga
	 */
	public String getFechaDescarga() {
		return fechaDescarga;
	}
	/**
	 * @param fechaDescarga the fechaDescarga to set
	 */
	public void setFechaDescarga(String fechaDescarga) {
		this.fechaDescarga = fechaDescarga;
	}
	/**
	 * @return the pesoBrutoDescargado
	 */
	public double getPesoBrutoDescargado() {
		return pesoBrutoDescargado;
	}
	/**
	 * @param pesoBrutoDescargado the pesoBrutoDescargado to set
	 */
	public void setPesoBrutoDescargado(double pesoBrutoDescargado) {
		this.pesoBrutoDescargado = pesoBrutoDescargado;
	}
	
	
	
	

}
